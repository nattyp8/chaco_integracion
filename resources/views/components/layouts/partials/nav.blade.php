
<div class="flex justify-between">
    
            <div class="space-y-2.5">
                <div class="flex items-center gap-2.5 ">
                   <img
                    src="{{ asset('images/lineas.png') }}"
                    class="h-4 w-auto transition {{ request()->route('year') == 1932 ? 'opacity-100' : 'opacity-50' }}" alt="">
                     <a href="{{ route('guerra.year', [
                        'year' => 1932,
                        'lang' => $lang
                        ]) }}"
                        class="nav-text {{ request()->route('year') == 1932 ? 'font-bold text-black' : 'text-gray-400' }}">
                            1932
                    </a>
                </div>

                <div class="flex items-center gap-2.5 ">
                    <img src="{{ asset('images/lineas.png') }}"
                    class="h-4 w-auto transition {{ request()->route('year') == 1933 ? 'opacity-100' : 'opacity-50' }}" alt="">
                     <a href="{{ route('guerra.year', [
                        'year' => 1933,
                        'lang' => $lang
                        ]) }}"
                        class="nav-text {{ request()->route('year') == 1933 ? 'font-bold text-black' : 'text-gray-400' }}">
                            1933
                    </a>
                </div>
            </div>
            <div class="space-y-2.5 text-center">
                <div class="flex justify-end items-center gap-2.5 ">
                    <img src="{{ asset('images/lineas.png') }}"
                    class="h-4 w-auto transition {{ request()->route('year') == 1934 ? 'opacity-100' : 'opacity-50' }}" alt="">
                    <a href="{{ route('guerra.year', [
                        'year' => 1934,
                        'lang' => $lang
                        ]) }}"
                        class="nav-text {{ request()->route('year') == 1934 ? 'font-bold text-black' : 'text-gray-400' }}">
                         1934
                    </a>
                </div>

                <div class="flex justify-end items-center gap-2.5">
                    <img src="{{ asset('images/lineas.png') }}"
                    class="h-4 w-auto transition {{ request()->route('year') == 1935 ? 'opacity-100' : 'opacity-50' }}"alt="">
                    <a href="{{ route('guerra.year', [
                        'year' => 1935,
                        'lang' => $lang
                        ]) }}"
                        class="nav-text {{ request()->route('year') == 1935 ? 'font-bold text-black' : 'text-gray-400' }}">
                            1935
                    </a>
                </div>
            </div>


            <div class="space-y-2.5 text-left">
                <div class="flex justify-end items-center gap-2.5 w-36">
                    <img src="{{ asset('images/antestitulo.svg') }}"
                    class="h-6 w-auto transition {{request('section') =='antecedentes' ? 'opacity-100' : 'opacity-50'}}"alt="">
                    <a href="{{ route('home', [
                        'section' => 'antecedentes',
                        'lang' => $lang
                    ]) }}"
                    class="nav-text {{ request('section') === 'antecedentes' ? 'font-bold text-black' : 'text-gray-400'  }} w-24 text-left">
                        {{$nav['inicio']}}
                    </a>
                </div>
                <div class="flex justify-end items-center gap-2.5 w-36">
                    <img src="{{ asset('images/antestitulo.svg') }}"
                        class="h-6 w-auto opacity-50 transition" alt="">

                    <a href="{{ request()->fullUrlWithQuery([
                        'lang' => $lang === 'es' ? 'en' : 'es'
                    ]) }}"
                    class="nav-text text-gray-400 w-24 text-left">
                        {{ $nav['language'] }}
                    </a>
                </div>
            </div>
            
</div>
