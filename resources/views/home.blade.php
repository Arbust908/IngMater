@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <section name="hero">
        <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
            @lang('home.title')
        </h1>
        <p>@lang('home.subtitle')</p>
    </section>
    <section name="features">
        {{-- Blob con icono nombre y link --}}
        @each('paginas.components.home_card', __('home.cards'), 'card')
    </section>
</div>
@endsection
