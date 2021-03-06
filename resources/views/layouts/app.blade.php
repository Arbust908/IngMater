<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f31638581.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gris-700 min-h-screen antialiased leading-none font-sans">
    <div id="app" class="flex flex-col bg-white">
        @TopNav()@endTopNav
        <main>
            @yield('content')
        </main>
        @Footer()@endFooter
    </div>
    <!-- Scripts -->
    @include('layouts.components.newModal')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
