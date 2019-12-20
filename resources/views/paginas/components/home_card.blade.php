<a href="{{ url( __('routes.'.$card['slug']) ) }}" class="bg-main-200 px-6 py-4 text-white text-base mb-3 flex shadow-md items-center rounded-xxl md:w-full md:mx-4 md:max-w-xm">
    <img src="/img/{{ $card['img'] }}" alt="Icono de {{$card['title']}}" class="mr-6 font-bold text-sm">
    <h3 class="md:text-xxl">{{ $card['title'] }}</h3>
</a>
