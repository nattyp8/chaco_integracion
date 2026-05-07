
import './timeline.js'
// import L from 'leaflet';
// import 'leaflet/dist/leaflet.css';

// document.addEventListener('DOMContentLoaded', () => {

//     const map = L.map('map', {
//         zoomControl: false,
//         attributionControl: false
//     }).setView([-21.5, -60], 6);

//     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
//         .addTo(map);

// });
import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()

window.timeLineComponent = (yearData) => ({
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






// agregar las funciones para el welcome