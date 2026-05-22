    <div class="flex items-center gap-2">
                <img src="{{ asset('images/lineas.png') }}"
                class="h-5 w-auto transition {{request('section') =='antecedentes' ? 'opacity-100' : 'opacity-50'}}"alt="">
                
                <a href="{{ route('home', [
                                'section' => 'antecedentes',
                                'lang' => $lang
                            ]) }}"
                    class="nav-home {{ $section === 'antecedentes' ? 'text-black' : 'text-gray-400' }}">
                        {{ $nav['antecedentes'] }}
                </a>

    </div>

    <div class="flex items-center gap-2">
                <img src="{{ asset('images/lineas.png') }}"
                class="h-5 w-auto transition <transition {{request('section') =='fronteras' ? 'opacity-100' : 'opacity-50'}}" alt="">
                <a href="{{ route('home', [
                                'section' => 'fronteras',
                                'lang' => $lang
                            ]) }}"
                    class="nav-home {{ $section === 'fronteras' ? 'text-black' : 'text-gray-400' }}">
                        {{ $nav['fronteras'] }}
                </a>
    </div>


    <div class="flex items-center gap-2 ">
            <img src="{{ asset('images/lineas.png') }}"
            class="h-5 w-auto transition {{request('section') =='fortines' ? 'opacity-100' : 'opacity-50'}}" alt="">
                <a href="{{ route('home', [
                            'section' => 'fortines',
                            'lang' => $lang
                        ]) }}"
                    class="nav-home {{ $section === 'fortines' ? 'text-black' : 'text-gray-400' }}">
                        {{ $nav['fortines'] }}
                </a>
    </div>

