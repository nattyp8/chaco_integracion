window.timeLineComponent = (yearData) => ({
    year: yearData,
    currentIndex: 0,
    dragging: false,

    get currentEvent() {
        return this.year.events[this.currentIndex]
    },

    step: 0,
    init() {
        this.step = 100 / (this.year.events.length - 1)
    },

    selectEvent(event, index) {
        this.currentIndex = index
    },

    startDrag() {
        this.dragging = true
    },

    stopDrag() {
        this.dragging = false
    },

    onDrag(e, el) {
        if (!this.dragging) return

        const rect = el.getBoundingClientRect()
        const x = e.clientX - rect.left
        const percent = Math.max(0, Math.min(1, x / rect.width))

        const index = Math.round(percent * (this.year.events.length - 1))

        this.currentIndex = index
    }
})