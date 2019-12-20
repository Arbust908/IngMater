@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <section
        class="h-64 w-full px-2 py-12 flex flex-col justify-between text-main-100 text-center"
        style="background-image: url({{ url('img/home.jpg') }}); background-position: top left; background-repeat: no-repeat; background-size: cover;">
            {{-- Creo que en blanco va a quedar mejor --}}
        <h1 class="font-bold leading-normal text-xl uppercase">
            @lang('home.title')
        </h1>
        <p class="text-base mx-auto" style="max-width: 268px">@lang('home.subtitle')</p>
    </section>
    <section name="features" class="w-full py-8 px-6">
        {{-- Blob con icono nombre y link --}}
        @each('paginas.components.home_card', __('home.cards'), 'card')
    </section>
</div>
@endsection
