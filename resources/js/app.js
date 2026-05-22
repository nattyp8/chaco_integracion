
import './timeline.js'

import Alpine from 'alpinejs'

globalThis.Alpine = Alpine

Alpine.start()

globalThis.timeLineComponent = (yearData) => ({
    year: yearData,
    currentEvent: null,
    currentIndex: 0,

    get step() {
        return this.year.events.length > 1
            ? 100 / (this.year.events.length - 1)
            : 0
    },

    selectEvent(event, index) {
        this.currentEvent = event
        this.currentIndex = index
    }
})

// Agrega un evento de clic al elemento con id "intro"
document.addEventListener('DOMContentLoaded', () => {

    const intro = document.getElementById('intro')

    if (intro) {

        intro.addEventListener('click', () => {

            // fade out
            intro.classList.remove('opacity-100')
            intro.classList.add('opacity-0')

            setTimeout(() => {

                const url = intro.dataset.url

                globalThis.location.href = url

            }, 400)

        }, { once: true })
    }
})

// Función para volver a inicio después de inactividad
const tiempoInactividad = 60000

let temporizador

function volverAlInicio() {

    if (globalThis.location.pathname !== '/') { // ruta página de inicio

        globalThis.location.href = '/' 

    }

}

function reiniciarTemporizador() {

    clearTimeout(temporizador)

    temporizador = setTimeout(() => {

        volverAlInicio()

    }, tiempoInactividad)

}
   
document.addEventListener('DOMContentLoaded', () => {

    document.addEventListener('click', reiniciarTemporizador)

    document.addEventListener('mousemove', reiniciarTemporizador)

    document.addEventListener('touchstart', reiniciarTemporizador)

    document.addEventListener('keydown', reiniciarTemporizador)

    reiniciarTemporizador()

})


document.addEventListener('DOMContentLoaded', () => {

    const links = document.querySelectorAll('a')

    links.forEach(link => {

        link.addEventListener('click', (e) => {

            
            if (!link.href.includes(window.location.origin)) return

            e.preventDefault()

            const mapPanel = document.getElementById('mapPanel')

            
            mapPanel?.classList.remove('opacity-100')
            mapPanel?.classList.add('opacity-0')

            setTimeout(() => {

                window.location.href = link.href

            }, 200)

        })
    })
})




