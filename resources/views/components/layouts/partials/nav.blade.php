<div class="w-[95px] h-0.5 bg-gray-400 mb-2"></div>
<div class="flex justify-between">
            <div class="space-y-[10px]">
                <div class="flex items-center gap-[10px] group">
                   <img
                    src="{{ asset('images/lineas.png') }}" 
                    class="h-[18px] w-auto opacity-50 group-hover:opacity-100 transition" alt="">
                     <a href="{{ route('guerra.year', [
                        'year' => 1932,
                        'lang' => $lang
                    ]) }}" class="nav-text">1932
                    </a>
                </div>

                <div class="flex items-center gap-[10px]">
                    <img src="{{ asset('images/lineas.png') }}" 
                    class="h-[18px] w-auto opacity-50 group-hover:opacity-100 transition"
                    alt="">
                     <a href="{{ route('guerra.year', [
                        'year' => 1933,
                        'lang' => $lang
                    ]) }}" class="nav-text">1933
                    </a>
                </div>
            </div>
            <div class="space-y-[10px] text-center">
                <div class="flex justify-end items-center gap-[10px]">
                    <img src="{{ asset('images/lineas.png') }}" 
                    class="h-[18px] w-auto opacity-50 group-hover:opacity-100 transition" alt="">
                    <a href="{{ route('guerra.year', [
                        'year' => 1934,
                        'lang' => $lang
                    ]) }}" class="nav-text">1934
                    </a>
                </div>

                <div class="flex justify-end items-center gap-[10px]">
                    <img src="{{ asset('images/lineas.png') }}" 
                    class="h-[18px] w-auto opacity-50 group-hover:opacity-100 transition"
                    alt="">
                    <a href="{{ route('guerra.year', [
                        'year' => 1935,
                        'lang' => $lang
                    ]) }}" class="nav-text">1935
                    </a>
                </div>
            </div>
            <div class="space-y-[10px] text-left">
                <div class="flex justify-end items-center gap-[10px]">
                    <img src="{{ asset('images/antestitulo.svg') }}" 
                    class="h-[25px] w-auto opacity-50 group-hover:opacity-100 transition"
                    alt="">
                    <a href="{{ route('home', [
                        'section' => 'antecedentes',
                        'lang' => $lang
                    ]) }}">
                        {{$nav['inicio']}}
                    </a>
                </div>
                <div class="flex justify-end items-center gap-[10px]">
                    <img src="{{ asset('images/antestitulo.svg') }}" 
                    class="h-[25px] w-auto opacity-50 group-hover:opacity-100 transition"
                    alt="">
                   <a href="{{ request()->fullUrlWithQuery([
                        'lang' => $lang === 'es' ? 'en' : 'es'
                    ]) }}"
                    class="nav-text">
                        {{ $nav['language'] }}
                    </a>
                </div>
            </div>
</div>
