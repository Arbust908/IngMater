<nav id="desktop_nav_bar" class="hidden md:block lg:text-lg">
    <ul class="flex text-center text-main-100 uppercase font-bold font-sans w-full justify-around items center">
        <li class="py-1 pr-2 flex items-center">
            <a href="{{ url(__('routes.who')) }}">
                @lang('who.title')
            </a>
        </li>
        <li class="py-1 pr-2 flex items-center">
            <a href="{{ url(__('routes.portfolio')) }}">
                @lang('portfolio.title')
            </a>
        </li>
        <li class="py-1 pr-2 flex items-center">
            <a href="{{ url(__('routes.contact')) }}">
                @lang('contact.title')
            </a>
        </li>
        <li class="py-1 pr-2 flex items-center lg:text-xl">
            <a href="https://www.linkedin.com/company/ingmater-consultores/">
                <i class="fab fa-linkedin"></i>
            </a>
        </li>
        <li class="py-1 pr-2 flex items-center relative">
            <a id="desktop_nav_lang_changer" class="w-full flex justify-center items-center">
                @lang('nav.change_lang')
                <i class="fas fa-chevron-down flex items-center transition px-2" data-state='closed'></i>
            </a>
            <button onclick="event.preventDefault();document.getElementById('lang-change').submit();" class="hidden w-full py-3 px-1 rounded shadow absolute left-0 bg-white mt-12 uppercase flex items-center justify-around" id="desktop_nav_other_lang">
                @lang('lang.flag')
                <span class="text-sm">
                    @lang('lang.lang')
                </span>
            </button>
        </li>
        <form id="lang-change" action="{{ route('lang') }}" method="POST" class="hidden">
            {{ csrf_field() }}
            <input type="hidden" name="languaje" value="@lang('lang.lang')">
            <input type="hidden" name="page" value="{{ Route::currentRouteName() }}">
        </form>
    </ul>
</nav>

<script>
    const desk_langChanger = document.getElementById('desktop_nav_lang_changer');
    const desk_ = document.getElementById('desktop_nav_other_lang');

    // const chevronRotator = (element) => {
    //     if(element.dataset.state == 'closed') {
    //         element.classList.add('rotated');
    //         element.dataset.state = 'opened';
    //         return true;
    //     } else if(element.dataset.state == 'opened') {
    //         element.classList.remove('rotated');
    //         element.dataset.state = 'closed';
    //         return false;
    //     }
    // }

    desk_langChanger.addEventListener('click', (event) => {
        event.preventDefault();
        let chevron = desk_langChanger.querySelector('i.fa-chevron-down');
        if( chevronRotator(chevron) ){
            desk_.classList.remove('hidden');
        } else {
            desk_.classList.add('hidden');
        }
    });
</script>
