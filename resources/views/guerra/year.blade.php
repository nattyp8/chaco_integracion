@extends('layouts.app')
@section('content')
    <div id="app"
        x-data="timeLineComponent(@js($yearData))"
         class="relative h-full">

        <div class="pr-10 pb-32">
            <h1 x-text="year.title" class="title"></h1>

            <p class="paragraph" x-text="year.intro" x-show="!currentEvent"></p>

            <div class="mb-6" x-show="currentEvent">
                <p class="text-sm opacity-60" x-text="currentEvent.date"></p>
                <p class="paragraph mt-2" x-text="currentEvent.text"></p>
            </div>
        </div>
    
        <div
            class="absolute bottom-5 left-0 right-0 px-14 h-32 cursor-pointer"
            @mousedown="startDrag"
            @mouseup="stopDrag"
            @mouseleave="stopDrag"
            @mousemove="onDrag($event, $el)">

            <!-- Línea base -->
            <div class="absolute top-1/2 left-0 w-full h-0.5 bg-gray-300"></div>

            <!-- Punto móvil -->
            <div
                class="absolute top-1/2 -translate-y-1/2 w-4 h-4 bg-black rounded-full transition-all duration-300"
                :style="`left: ${currentIndex * step}%`">
            </div>

            <!-- Eventos -->
            <template x-for="(event, index) in year.events" :key="event.id">
                <div
                    class="absolute flex flex-col items-center cursor-pointer"
                    :style="`left: ${index * step}%; transform: translateX(-50%);`"
                    @click="selectEvent(event, index)"
                >

                    <!-- Línea vertical -->
                    <div
                        class="w-0.5 h-25 transition-all duration-300"
                        :class="index % 2 === 0 ? 'bg-gray-300 mt-2' : 'bg-gray-300 mb-2 order-2'">
                    </div>

                    <!-- Texto -->
                    <span
                        class="text-xs whitespace-nowrap"
                        :class="[
                            currentIndex === index ? 'text-black' : 'text-gray-400',
                            index % 2 === 0 ? 'mt-2' : 'mb-2 order-first'
                        ]"
                        x-text="event.label">
                    </span>

                </div>
            </template>

        </div>

    </div>
@endsection
