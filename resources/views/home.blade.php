@extends('layouts.app')
    @section('content')
        <div class="flex flex-col h-full">
            <div>
                <div class="flex items-start gap-3 mb-3">
                    <img src="{{ asset('images/antestitulo.svg') }}"
                        class="h-7.5 w-auto opacity-50 mt-1"
                        alt="">
                    <h1 class="title max-w-[320px] m-0">
                        {{ $data['title'] }}
                    </h1>
                </div>
                <div class="space-y-1.25 -max-w-105 whitespace-pre-line mb-5">
                    @foreach ($data['paragraphs'] as $p)
                        <p class="paragraph">
                            {{ $p }}
                        </p>
                    @endforeach
                </div>
            </div>
            <div>
                <div class="flex justify-between items-start">

                    <div class="flex items-center gap-[10px]">

                        <div class="flex items-center gap-[8px]">
                            <img src="{{ asset('images/lineas.png') }}"
                    class="h-[20px] w-auto opacity-50 group-hover:opacity-100 transition"alt="">
                            <a href="{{ route('home', ['section' => 'antecedentes']) }}"
                                class="nav-home {{ $section === 'antecedentes' ? 'text-black' : 'text-gray-400' }}">
                                    ANTECEDENTES Y RESOLUCIÓN
                            </a>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <img src="{{ asset('images/lineas.png') }}"
                    class="h-[20px] w-auto opacity-50 group-hover:opacity-100 transition" alt="">
                            <a href="{{ route('home', ['section' => 'fronteras']) }}"
                                class="nav-home {{ $section === 'fronteras' ? 'text-black' : 'text-gray-400' }}">
                                    FRONTERAS Y AVANCES
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center gap-[8px] ">
                        <img src="{{ asset('images/lineas.png') }}"
                    class="h-[20px] w-auto opacity-50 group-hover:opacity-100 transition" alt="">
                         <a href="{{ route('home', ['section' => 'fortines']) }}"
                                class="nav-home {{ $section === 'fortines' ? 'text-black' : 'text-gray-400' }}">
                                    FORTINES VISITABLES
                            </a>
                    </div>
                </div>
            </div>
        </div>

    @endsection



    

