globalThis.timeLineComponent = (yearData) => ({
    year: yearData,
    currentIndex: 0,
    dragging: false,
    contentVisible: true,

    get currentEvent() {
        return this.year.events[this.currentIndex]
    },

    step: 0,

    selectEvent(event, index) {
        this.changeEvent(index)
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

        const clientX = e.clientX ?? e.touches?.[0]?.clientX

        if (clientX === undefined) return

        const x = clientX - rect.left

        const percent = Math.max(0, Math.min(1, x / rect.width))

        const index = Math.round(percent * (this.year.events.length - 1))

        this.changeEvent(index)
    },

    init() {

        if (!this.year || !this.year.events) return

        this.step = 100 / (this.year.events.length - 1)
    },

    changeEvent(index) {

        if (index === this.currentIndex) return

        this.contentVisible = false

        setTimeout(() => {

            this.currentIndex = index

            this.contentVisible = true

        }, 200)
    }
})