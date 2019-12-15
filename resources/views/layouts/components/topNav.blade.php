<nav class="flex w-full justify-between py-3 shadow-md">
    <button class="w-1/6" id="hamburger_toggler"><i class="far fa-bars"></i></button>
    <section class="w-4/6">
        <img src="/img/logo.png" alt="Logo de IngMater" width='100px' title="INGMATER" class="mx-auto">
    </section>
    <div class="w-1/6"></div>
    <!-- {{ 'routes.' . Route::currentRouteName() }} -->
    <!-- {{ "routes." . Route::currentRouteName() . "" }} -->
    <!-- {{ __( "routes." . Route::currentRouteName() ) }} -->
</nav>
@include('layouts.components.mobileNav')
{{-- @if ( config('app.env') == 'local' )
<nav class="flex w-full justify-center absolute bottom-0 left-0 pb-2 pl-2">
    <button
        class="w-1/4 px-4 py-2 m-2 rounded-full bg-green-600 text-gray-200 shadow-lg hover:bg-main-200 hover:text-white font-serif font-semibold"
        onclick="event.preventDefault();
            document.getElementById('lang-change').submit();">
        <i class="far fa-flag"></i>
        @lang('lang.lang')
    </button>
    <form id="lang-change" action="{{ route('lang') }}" method="POST" class="hidden">
        {{ csrf_field() }}
        <input type="hidden" name="languaje" value="@lang('lang.lang')">
        <input type="hidden" name="page" value="{{ Route::currentRouteName() }}">
    </form>
</nav>
@endif --}}


<script>
    const mobileNav = document.getElementById('mobile_nav_bar');
    const navOpener = document.getElementById('hamburger_toggler');
    const navCloser = document.getElementById('mobile_nav_close');
    let isNavHidden = mobileNav.classList.contains('out-left');

    const toggleMobileNav = () => {
        if(isNavHidden) {
            mobileNav.classList.remove('out-left');
            isNavHidden = false;
        } else {
            mobileNav.classList.add('out-left');
            isNavHidden = true;
        }
    }

    navOpener.addEventListener('click', toggleMobileNav);
    navCloser.addEventListener('click', toggleMobileNav);
</script>
