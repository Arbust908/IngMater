<a
    href="{{ url( __('routes.'.$card['slug']) ) }}"
    class="bg-main-200 px-6 py-4 text-white text-base mb-3 flex shadow-md items-center rounded-xxl md:w-full md:mx-4 lg:max-w-xm cursor-pointer border border-main-200 hover:text-main-200 hover:bg-white hover:shadow-xl transition"
>
    <div class="mr-6 font-bold text-sm hover:text-main-200">
        @lang($card['img'])
    </div>
    <h3 class="md:text-xxl">{{ $card['title'] }}</h3>
</a>
