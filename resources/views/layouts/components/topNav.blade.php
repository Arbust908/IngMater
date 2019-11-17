<nav class="flex w-full justify-between">
    <button class="w-1/4"><i class="far fa-bars"></i></button>
    <img class="w-1/2" src="" alt="Logo">
    <div class="w-1/4"></div>
    <!-- {{ 'routes.' . Route::currentRouteName() }} -->
    <!-- {{ "routes." . Route::currentRouteName() . "" }} -->
    <!-- {{ __( "routes." . Route::currentRouteName() ) }} -->
</nav>
{{--
@if(Route::has('login'))
<div class="absolute top-0 right-0 mt-4 mr-4">
    @auth
        <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
    @else
        <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
        @endif
    @endauth
</div>
@endif
<nav class="bg-blue-900 shadow mb-8 py-6">
    <div class="container mx-auto px-6 md:px-0">
        <div class="flex items-center justify-center">
            <div class="mr-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <div class="flex-1 text-right">
                @guest
                    <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                        class="no-underline hover:underline text-gray-300 text-sm p-3"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav> --}}
