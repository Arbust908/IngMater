@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <section
        class="h-64 w-full px-2 py-12 bg-left-top bg-cover bg-repeat md:bg-center"
        style="background-image: url({{ url('img/home.jpg') }});">
        <div class="flex flex-col justify-between text-main-100 text-center md:w-1/2 md:mr-auto">
            <h1 class="font-bold leading-normal text-xl uppercase mb-12 md:max-w-xs md:mx-auto">
                @lang('home.title')
            </h1>
            <p class="text-base mx-auto home-hero-text md:max-w-xs">@lang('home.subtitle')</p>
        </div>
            {{-- Creo que en blanco va a quedar mejor --}}
    </section>
    <section class="w-full py-8 px-6 lg:flex lg:justify-around">
        {{-- Blob con icono nombre y link --}}
        @each('paginas.components.home_card', __('home.cards'), 'card')
    </section>
</div>
@endsection
