@extends('layouts.app')

@section('content')
<main>
    <section class="flex justify-center items-center relative pt-16 pb-12">
        <article class="w-full text-center relative z-10 text-white py-4 md:hidden">
            @if($pilar === 'inspects')
            <a href="@lang('routes.iyd')" class="absolute left-0 top-0 p-4 z-30">
                <i class="fas fa-chevron-left"></i>
            </a>
            @endif
            @if($pilar === 'cyc')
            <a href="@lang('routes.inspects')" class="absolute left-0 top-0 p-4 z-30">
                <i class="fas fa-chevron-left"></i>
            </a>
            @endif
            <h2 class="relative z-20">{{ __($pilar.'.title') }}</h2>
            @if($pilar === 'iyd')
            <a href="@lang('routes.inspects')" class="absolute right-0 top-0 p-4 z-30">
                <i class="fas fa-chevron-right"></i>
            </a>
            @endif
            @if($pilar === 'inspects')
            <a href="@lang('routes.cyc')" class="absolute right-0 top-0 p-4 z-30">
                <i class="fas fa-chevron-right"></i>
            </a>
            @endif
        </article>
        <article class="w-full text-center relative z-10 text-white py-4 hidden md:flex md:justify-center md:items-center">
            <div class="relative z-20 inline-block">
                @lang('home.cards.'.$pilar.'.img')
            </div>
            <h2 class="relative z-20 text-xxxl px-8 border-r-2 border-gris-600 h-16 flex items-center">
                {{ __('home.cards.'.$pilar.'.title') }}
            </h2>
            @if($pilar !== 'inspects')
            <h2 class="relative z-20 text-xxl text-gris-600 px-8 border-r-2 border-gris-600 h-16 flex items-center">
                <a href="@lang('routes.inspects')">
                    {{ __('home.cards.inspects.title') }}
                </a>
            </h2>
            @endif
            @if($pilar !== 'cyc')
            <h2 class="relative z-20 text-xxl text-gris-600 px-8 h-16 flex items-center {{ $pilar === 'inspects' ? 'border-r-2 border-gris-600' : null}}">
                <a href="@lang('routes.cyc')">
                    {{ __('home.cards.cyc.title') }}
                </a>
            </h2>
            @endif
            @if($pilar !== 'iyd')
            <h2 class="relative z-20 text-xxl text-gris-600 px-8 h-16 flex items-center">
                <a href="@lang('routes.iyd')">
                    {{ __('home.cards.iyd.title') }}
                </a>
            </h2>
            @endif
        </article>
        <img src="{{ url('img/template_mobile.png') }}" alt="" class="absolute inset-0 z-0 w-full h-full object-cover js-template_banner">
    </section>
    <section class="p-8 md:px-48">
        @foreach (__($pilar.'.cajas') as $caja)
        <article class="flex flex-col mb-12 md:flex-row md:flex-wrap md:justify-between">
            <h3 class="text-main-200 font-bold pb-4 md:order-1 md:w-full lg:text-xxl uppercase text-center md:text-left">{{ $caja['title'] }}</h3>
            <ul class="text-gris-800 pb-2 md:order-3 md:rounded-xl md:shadow md:p-6 md:w-7/12 md:flex md:flex-col md:justify-center lg:text-lg">
                @foreach ($caja['desc'] as $item)
                <li class="pb-1 text-center leading-normal flex justify-center md:justify-start">
                    <span class="pr-3 hidden md:inline-block">-</span>
                    <span class="text-center md:text-left">{{ $item }}</span>
                </li>
                @endforeach
            </ul>
            <img src="{{ $caja['image'] }}" alt="" class="w-full h-48 object-cover md:order-2 md:w-4/12 rounded-xl">
        </article>
        @endforeach
    </section>
</main>
<script defer>
    let template_banner = document.querySelector('.js-template_banner');
    const swapImgHome = (element) => {
        if (window.innerWidth > 768) {
            element.style.backgroundImage = "url({{ url('img/template.png') }})";
        } else {
            element.style.backgroundImage = "url({{ url('img/template_mobile.png') }})";
        }
    }
    window.addEventListener('load', () => {
        swapImgHome(template_banner);
    })
    window.addEventListener('resize', () => {
        swapImgHome(template_banner);
    })
</script>
@endsection