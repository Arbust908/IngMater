<nav id="desktop_nav_bar" class="hidden md:block">
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
        <li class="py-1 pr-2 flex items-center">
            <a href="https://www.linkedin.com/">
                <i class="fab fa-linkedin"></i>
            </a>
        </li>
        <li class="py-1 pr-2 flex items-center relative">
            <a id="desktop_nav_lang_changer" class="w-full flex justify-center items-center">
                @lang('nav.change_lang')
                <i class="fas fa-chevron-down flex items-center transition pl-2" data-state='closed'></i>
            </a>
            <button onclick="event.preventDefault();document.getElementById('lang-change').submit();" class="hidden w-full py-3 mt-2 rounded shadow absolute left-0 bg-white mt-10" id="desktop_nav_other_lang">
                @lang('lang.fullOther')
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
    const langChanger = document.getElementById('desktop_nav_lang_changer');
    const otherLang = document.getElementById('desktop_nav_other_lang');

    const chevronRotator = (element) => {
        if(element.dataset.state == 'closed') {
            element.classList.add('rotated');
            element.dataset.state = 'opened';
            return true;
        } else if(element.dataset.state == 'opened') {
            element.classList.remove('rotated');
            element.dataset.state = 'closed';
            return false;
        }
    }

    langChanger.addEventListener('click', (event) => {
        event.preventDefault();
        let chevron = langChanger.querySelector('i.fa-chevron-down');
        if( chevronRotator(chevron) ){
            otherLang.classList.remove('hidden');
        } else {
            otherLang.classList.add('hidden');
        }
    });
</script>
