@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <section
        class="h-64 w-full px-2 py-12 bg-left-top bg-cover bg-repeat md:bg-center js-home_banner"
        style="background-image: url({{ url('img/home_mobile.png') }});">
        <div class="flex flex-col justify-between text-main-100 text-center md:w-1/2 md:mr-auto">
            <h1 class="font-bold leading-normal text-xxl uppercase mb-10 md:max-w-xs md:mx-auto">
                @lang('home.title')
            </h1>
            <p class="text-base font-bold mx-auto home-hero-text md:max-w-xs">@lang('home.subtitle')</p>
        </div>
            {{-- Creo que en blanco va a quedar mejor --}}
    </section>
    <section class="w-full py-8 px-6 lg:flex lg:justify-around">
        {{-- Blob con icono nombre y link --}}
        @each('paginas.components.home_card', __('home.cards'), 'card')
    </section>
</div>
<script defer>
    let home_banner = document.querySelector('.js-home_banner');
    const swapImgHome = (element) => {
        console.log('swapper');
        console.log(window.innerWidth);
        if (window.innerWidth > 768) {
            console.log('grande');
            element.style.backgroundImage = "url({{ url('img/home.png') }})";
            console.log(element.style.backgroundImage);
        } else {
            console.log(element);
            console.log(element.style.backgroundImage);
            element.style.backgroundImage = "url({{ url('img/home_mobile.png') }})";
            console.log(element.style.backgroundImage);
        }
    }
    window.addEventListener('load', () => {
        swapImgHome(home_banner);
    })
    window.addEventListener('resize', () => {
        swapImgHome(home_banner);
    })
</script>
@endsection
