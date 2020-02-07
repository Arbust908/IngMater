@extends('layouts.app')

@section('content')
<main>
    <section class="flex justify-center items-center relative pt-16 pb-12">
        <article class="w-full text-center relative z-10 text-white py-4 md:hidden">
            <h2 class="relative z-20">{{ __($pilar.'.title') }}</h2>
            <a href="@lang('routes.inspects')" class="absolute right-0 top-0 p-4 z-30">
                <i class="fas fa-chevron-right "></i>
            </a>
            <div class="absolute inset-0 z-0 w-full h-full bg-gris-200 opacity-25"></div>
        </article>
        <article class="w-full text-center relative z-10 text-white py-4 hidden md:flex md:justify-center md:items-center">
            <div class="relative z-20 inline-block">
                @lang('home.cards.'.$pilar.'.img')
            </div>
            <h2 class="relative z-20 text-xxxl px-8 border-r-2 border-gris-600 h-16 flex items-center">
                {{ __('home.cards.'.$pilar.'.title') }}
            </h2>
            <h2 class="relative z-20 text-xxl text-gris-600 px-8 border-r-2 border-gris-600 h-16 flex items-center">
                <a href="@lang('routes.inspects')">
                    {{ __('home.cards.inspects.title') }}
                </a>
            </h2>
            <h2 class="relative z-20 text-xxl text-gris-600 px-8 h-16 flex items-center">
                <a href="@lang('routes.cyc')">
                    {{ __('home.cards.cyc.title') }}
                </a>
            </h2>
            <div class="absolute inset-0 z-0 w-full h-full bg-gris-200 opacity-25"></div>
        </article>
        <img src="@lang(''.$pilar.'.banner')" alt="" class="absolute inset-0 z-0 w-full h-full object-cover">
    </section>
    <section class="p-8 md:px-48">
        @foreach (__($pilar.'.cajas') as $caja)
        <article class="flex flex-col mb-12 md:flex-row md:flex-wrap md:justify-between">
            <h3 class="text-main-200 font-bold pb-4 md:order-1 md:w-full lg:text-xxl uppercase">{{ $caja['title'] }}</h3>
            <ul class="text-gris-800 pb-2 md:order-3 md:rounded-xl md:shadow md:p-6 md:w-7/12 md:flex md:flex-col md:justify-center lg:text-lg">
                @foreach ($caja['desc'] as $item)
                <li class="pb-2"><span class="pr-3">-</span>{{ $item }}</li>
                @endforeach
            </ul>
            <img src="{{ $caja['image'] }}" alt="" class="w-full h-48 object-cover md:order-2 md:w-4/12 rounded-xl">
        </article>
        @endforeach
    </section>
</main>
@endsection