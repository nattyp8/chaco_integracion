@extends('layouts.app')
@section('content')
    <div id="app"
        x-data="timeLineComponent(@js($yearData))"
        class="h-full flex flex-col">

            <!-- titulos fijos -->
        <div class="shrink-0 px-10 pt-6 bg-[#F3F3F5] z-10">
            <div class="flex items-center gap-2 mb-2">
                <img
                    src="{{ asset('images_guerrachaco/antestitulo.svg') }}"
                    class="h-9 w-auto"
                    alt=""
                >
                <h1 x-text="year.title" class="title"> . </h1>
            </div>
        </div>

        <!-- parrafos -->
        <div class="flex-1 overflow-y-auto px-10 pb-6">
            <div x-show="currentEvent"
            class="transition-opacity duration-300"
            :class="contentVisible ? 'opacity-100' : 'opacity-0'">
                <p class="timeline-date" x-text="currentEvent.date"></p>
                <p class="paragraph-timeline mt-2 whitespace-pre-line"
                x-text="currentEvent.text"></p>
            </div>
        </div>

        <!-- timeline -->
        <div
            class="px-14 h-50 shrink-0 relative  cursor-pointer"

            @pointerdown="startDrag"
            @pointermove="onDrag($event,$el)"
            @pointerup="stopDrag"
            @pointercancel="stopDrag"
             >

            <div class="absolute top-1/2 left-0 w-full h-0.75 bg-gray-300 -translate-y-1/2"></div>

            <div
                class="absolute top-1/2 -translate-y-1/2 w-4 h-4 bg-black rounded-full"
                :style="`left: ${currentIndex * step}%`">
            </div>

            <template x-for="(event, index) in year.events" :key="event.id">
                <div
                    class="absolute flex flex-col items-center"
                    :style="`left: ${index * step}%; top: 50%; transform: translate(-50%, -50%)`"
                    @click="selectEvent(event, index)">

                    <!-- fechas arriba -->
                    <template x-if="index % 2 === 0">
                        <div class="flex flex-col items-center">
                            <span
                                class=" timelinetext whitespace-nowrap mb-1 "
                                :class="currentIndex === index ? 'text-black' : 'text-gray-400'"
                                x-text="event.label">
                            </span>

                            <div class="w-0.5 h-5 bg-gray-300 mb-15"></div>
                        </div>
                    </template>

                    <!-- fechas abajo -->
                    <template x-if="index % 2 !== 0">
                        <div class="flex flex-col items-center">
                            <div class="w-0.5 h-5 bg-gray-300 mt-15"></div>

                            <span
                                class=" timelinetext whitespace-nowrap mt-1 "
                                :class="currentIndex === index ? 'text-black' : 'text-gray-400'"
                                x-text="event.label">
                            </span>
                        </div>
                    </template>

                </div>

            </template>
            
        </div>
    </div>
@endsection
