@extends('guerra_chaco.layouts.app')
    @section('content')
        <div class="flex flex-col h-full ">
            <div class="shrink-0 px-5 pt-6  z-10">
                <div class="flex items-start gap-3">
                    <img src="{{ asset('images_guerrachaco/antestitulo.svg') }}"
                        class="h-9 w-auto  mt-1"
                        alt="icono antes de los titulos">
                    <h1 class="title max-w-[320px]">
                        {{ $title }}
                    </h1>
                </div>
            </div>

            {{-- texto principal --}}
            <div class="flex-1 overflow-y-auto px-2 ">
                <div class="space-y-1.25 -max-w-105 whitespace-pre-line ">
                     @foreach ($paragraphs as $p)
                        <p class="paragraph">
                            {{ $p }}
                        </p>
                    @endforeach
                </div>
            </div>
           
            {{-- nav antecedentes  --}}
            <div class="w-24 h-0.5 bg-gray-400 mb-1 mt-1"></div>
            <div class="flex items-start gap-2.5">
                @include('guerra_chaco.partials.antecedentes')
            </div>
        </div>

    @endsection



    

