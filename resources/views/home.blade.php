@extends('layouts.app')
    {{-- @section('map')
        <div id="map" class="w-full h-full"></div>
    @endsection --}}
    @section('content')
        <div class="flex flex-col h-full justify-between">
            <div>
                <div class="flex items-start gap-[18px] mb-[28px]">
                    <div class="w-[18px] h-[42px]"></div>
                    <h1 class="title max-w-[320px]">
                       <img src="/images/antestitulo.svg" alt="" class="cab"> {{ $data['title'] }}
                    </h1>
                </div>
                <div class="space-y-[14px] max-w-[420px]">
                    @foreach ($data['paragraphs'] as $p)
                        <p class="paragraph">
                            {{ $p }}
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="mt-[40px]">
                <div class="flex justify-between items-start">

                    <div class="flex items-center gap-[40px]">

                        <div class="flex items-center gap-[8px]">
                            <span class="text-[18px]">/</span>
                            <a href="{{ route('home', ['section' => 'antecedentes']) }}"
                                class="nav-text {{ $section === 'antecedentes' ? 'text-black' : 'text-gray-400' }}">
                                    ANTECEDENTES Y RESOLUCIÓN
                            </a>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <span class="text-[18px]">/</span>
                            <a href="{{ route('home', ['section' => 'fronteras']) }}"
                                class="nav-text {{ $section === 'fronteras' ? 'text-black' : 'text-gray-400' }}">
                                    FRONTERAS Y AVANCES
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center gap-[8px] ">
                        <span class="text-[18px]">/</span>
                         <a href="{{ route('home', ['section' => 'fortines']) }}"
                                class="nav-text {{ $section === 'fortines' ? 'text-black' : 'text-gray-400' }}">
                                    FORTINES VISITABLES
                            </a>
                    </div>
                </div>
                <div class="w-[190px] h-[2px] bg-gray-400 mt-[10px]"></div>
            </div>
        </div>

    @endsection



    

