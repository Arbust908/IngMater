<nav class="w-11/12 shadow-md bg-white absolute top-0 min-h-screen out-left transition" id="mobile_nav_bar">
    <ul class="w-9/12 mr-5 my-5 ml-auto text-center text-main-100 uppercase font-bold font-sans">
        <i class="far fa-times absolute top-0 right-0 pt-4 pr-4 hover:text-red-600" id="mobile_nav_close"></i>
        <li class="border-b border-gris-500 py-3">
            <img src="/img/logo.png" alt="Logo de IngMater" width='100px' title="INGMATER" class="mx-auto">
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
            <a href="{{ url(__('routes.contact')) }}">
                @lang('contact.title')
            </a>
        </li>
        <li class="border-b border-gris-500 py-3">
            <a href="https://www.linkedin.com/company/ingmater-consultores/">
                Linkedin <i class="fab fa-linkedin"></i>
            </a>
        </li>
        <li class="border-b border-gris-500 py-3 ">
            <a id="mobile_nav_lang_changer" class="relative w-full inline-block">
                @lang('nav.change_lang')
                <i class="fas fa-chevron-down absolute top-0 bottom-0 right-0  flex items-center transition" data-state='closed'></i>
                {{-- Armar DropDown con lenguaje --}}
                {{-- @lang('lang.lang') --}}
            </a>
            <button onclick="event.preventDefault();document.getElementById('lang-change-mob').submit();" class="hidden w-full py-3 mt-2 rounded shadow" id="mobile_nav_other_lang">
                @lang('lang.fullOther')
            </button>
        </li>
        <form id="lang-change-mob" action="{{ route('lang') }}" method="POST" class="hidden">
            {{ csrf_field() }}
            <input type="hidden" name="languaje" value="@lang('lang.lang')">
            <input type="hidden" name="page" value="{{ Route::currentRouteName() }}">
        </form>
    </ul>
</nav>

<script>
    const langChanger = document.getElementById('mobile_nav_lang_changer');
    const otherLang = document.getElementById('mobile_nav_other_lang');

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
