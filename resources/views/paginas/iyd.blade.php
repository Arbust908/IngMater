@extends('layouts.app')

@section('content')
<section>
    <h2>{{ __('iyd.title') }}</h2>
    <section>
        @foreach (__('iyd.cajas') as $caja)
        <article class="rounded shadow px-4 py-2 bg-white mb-2 w-3/12">
            <h3>{{ $caja['title'] }}</h3>
            <p>{{ $caja['desc'] }}</p>

        </article>
        @endforeach
    </section>
</section>
@endsection
