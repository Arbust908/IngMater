<nav class="w-11/12 shadow-md bg-white absolute top-0 min-h-screen">
    <ul class="w-9/12 mr-5 my-5 ml-auto text-center text-main-100 uppercase font-bold font-sans">
        <li class="border-b border-gris-500 py-3">
            <img src="/img/logo.png" alt="Logo de IngMater" title="INGMATER">
        </li>
        <li class="border-b border-gris-500 py-3">
            <a href="{{ url(__('routes.who')) }}">
                @lang('who.title')
            </a>
        </li>
        <li class="border-b border-gris-500 py-3">
            <a href="{{ url(__('routes.portfolio')) }}">
                @lang('portfolio.title')
            </a>
        </li>
        <li class="border-b border-gris-500 py-3">
            <a href="{{ url(__('routes.portfolio')) }}">
                @lang('portfolio.title')
            </a>
        </li>
        <li class="border-b border-gris-500 py-3">
            <a href="https://www.linkedin.com/">
                Linkedin <i class="fab fa-linkedin"></i>
            </a>
        </li>
        <li class="border-b border-gris-500 py-3">
            <a onclick="event.preventDefault();
            document.getElementById('lang-change').submit();">
                <i class="far fa-flag"></i><i class="fas fa-chevron-down"></i>
                {{-- Armar DropDown con lenguaje --}}
                {{-- @lang('lang.lang') --}}
            </a>
        </li>
        <form id="lang-change" action="{{ route('lang') }}" method="POST" class="hidden">
            {{ csrf_field() }}
            <input type="hidden" name="languaje" value="@lang('lang.lang')">
            <input type="hidden" name="page" value="{{ Route::currentRouteName() }}">
        </form>
    </ul>
</nav>
