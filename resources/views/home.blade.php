@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="list-reset">
                    @foreach (__('routes') as $key => $value)
                    <li class="inline pr-8">
                    <a
                        href="{{ Route($key) }}"
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
</div>
@endsection
