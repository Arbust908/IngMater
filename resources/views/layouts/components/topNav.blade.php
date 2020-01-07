<nav class="flex w-full justify-between py-3 lg:py-6 lg:px-3 lg:max-w-5xl lg:mx-auto items-center">
    <button class="w-1/6 md:hidden" id="hamburger_toggler"><i class="far fa-bars"></i></button>
    <section class="w-4/6 md:w-2/6">
        <a href="@lang('routes.home')">
            <img src="/img/logo.png" alt="Logo de IngMater" title="INGMATER" class="mx-auto md:ml-3 w-32 lg:w-64">
        </a>
    </section>
    <div class="w-1/6 md:w-4/6">
        @include('layouts.components.desktopNav')
    </div>
    <!-- {{ 'routes.' . Route::currentRouteName() }} -->
    <!-- {{ "routes." . Route::currentRouteName() . "" }} -->
    <!-- {{ __( "routes." . Route::currentRouteName() ) }} -->
</nav>
@include('layouts.components.mobileNav')

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
