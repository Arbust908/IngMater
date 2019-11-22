@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <div class="py-5 px-3 flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="list-reset">
                    @foreach (__('routes') as $key => $value)
                    <li class="inline pr-8">
                    <a
                        href="{{ url( '/' . __('routes.'.$key ) ) }}"
                        class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
                        title="{{ $value }}">
                        {{ $value }}
                    </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <section class="w-full flex flex-col"> {{-- imagen de fondo --}}
        <h1 class="text-main-200 text-xxl">@lang('home.title')</h1>
        <br>
        <p>@lang('home.subtitle')</p>
        <br>
    </section>
    <section>
        @foreach( __('home.cards') as $key => $value )
            {{ $key . '  ' .$value }}
            <br>
        @endforeach
    </section>
</div>
@endsection
