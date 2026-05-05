@extends('layouts.app')

@section('content')
    <div id="app"
        x-data="timeLineComponent(@js($yearData))"
        class="h-full flex flex-col">

        <!-- TEXTO -->
        <div class="overflow-y-auto pr-10 h-[55%]">
                <h1 x-text="year.title" class="title"></h1>

            <p class="paragraph" x-text="year.intro" x-show="!currentEvent"></p>

            <div class="mb-6" x-show="currentEvent">
                <p class="text-sm opacity-60" x-text="currentEvent.date"></p>
                <p class="paragraph mt-2" x-text="currentEvent.text"></p>
            </div>
        </div>

        <!-- TIMELINE -->
        <div
            class="px-14 h-70 shrink-0 relative  cursor-pointer"
            @mousedown="startDrag"
            @mouseup="stopDrag"
            @mouseleave="stopDrag"
            @mousemove="onDrag($event, $el)">

            <div class="absolute top-1/2 left-0 w-full h-[3px] bg-gray-300 -translate-y-1/2"></div>

            <div
                class="absolute top-1/2 -translate-y-1/2 w-4 h-4 bg-black rounded-full"
                :style="`left: ${currentIndex * step}%`">
            </div>

            <template x-for="(event, index) in year.events" :key="event.id">
                <div
                    class="absolute flex flex-col items-center"
                    :style="`left: ${index * step}%; top: 50%; transform: translate(-50%, -50%)`"
                    @click="selectEvent(event, index)">

                    <!-- ARRIBA -->
                    <template x-if="index % 2 === 0">
                        <div class="flex flex-col items-center mb-2">
                            <span
                                class="text-xs whitespace-nowrap mb-1"
                                :class="currentIndex === index ? 'text-black' : 'text-gray-400'"
                                x-text="event.label">
                            </span>

                            <div class="w-[2px] h-5 bg-gray-300 mb-15
                            "></div>
                        </div>
                    </template>

                    <!-- ABAJO -->
                    <template x-if="index % 2 !== 0">
                        <div class="flex flex-col items-center mt-2">
                            <div class="w-[2px] h-5 bg-gray-300 mt-15"></div>

                            <span
                                class="text-xs whitespace-nowrap mt-1"
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
