@extends('layouts.app')

@section('content')
<section
    class="h-64 md:h-full w-full px-2 py-12 bg-cover bg-center js-who_banner"
    style="background-image: url({{ url('img/who_mobile.png') }});">
    <div class="flex flex-col lg:justify-center text-center">
        <h1 class="font-bold text-main-100 leading-normal text-xl uppercase lg:text-xxxl md:mb-8 lg:mb-16">
            @lang('who.title')
        </h1>
    </div>
    <section class="font-bold text-lg mt-6 mb-8 lg:px-20 hidden md:flex justify-between">
        <p class="w-4/12 text-white text-center leading-normal">
            @lang('who.subtitle')
        </p>
        <p class="w-4/12 text-white text-center leading-normal">
            @lang('who.subtitle2')
        </p>
    </section>
</section>
<section class="font-bold mb-8 lg:px-40 md:hidden" id='who_sub_carousel'>
    <p class="m-4 p-4 w-11/12 text-gris-300 text-base text-center shadow rounded-xl leading-normal">
        @lang('who.subtitle')
    </p>
    <p class="m-4 p-4 w-11/12 text-gris-300 text-base text-center shadow rounded-xl leading-normal">
        @lang('who.subtitle2')
    </p>
</section>
<section class="w-full p-4 mb-6 md:w-8/12 md:float-left md:ml-6">
    <h3 class="text-center font-bold text-main-100 py-4 border-t border-main-100 text-lg leading-normal md:border-0 md:text-left">@lang('who.experiances.title')</h3>
    <ul id="who_exps" >
        @foreach ( __('who.experiances.exps') as $exp)
        <li
            class="m-4 p-4 w-11/12 text-gris-300 text-base text-center shadow rounded-xl leading-normal
            md:shadow-none md:text-left md:p-0 md:mt-0 md:w-11/12 md:list-disc">
            {{ $exp }}</li>
        @endforeach
    </ul>
</section>
<section class="w-11/12 mx-auto p-4 mb-6 flex flex-col md:w-3/12 md:rounded-lg md:shadow md:float-right md:mt-8 md:mr-6">
    <img src="/img/envelope-solid.svg" alt="" class="mx-auto mb-5" height="30" width="40">
    <h4 class="text-center font-bold text-main-100 pb-6 text-xxl uppercase">
        @lang('who.map.title')
    </h4>
    <h5 class="text-center font-bold text-main-100 pb-6 text-xl">
        <a href="mailto:contacto@ingmater.com">
            @lang('who.map.mail')
        </a>
    </h5>
    <h4 class="text-center font-bold text-main-100 pt-4 pb-4 text-lg">
        @lang('who.map.hq.location')
    </h4>
    <p class="text-center text-gris-300 text-lg">
        <a href="tel:+54 9 11 5953-9770">
            @lang('who.map.hq.phone')
        </a>
    </p>
</section>
<section class="w-full p-4 mb-6 flex flex-col">
    <h4 class="text-center font-bold text-main-100 pb-6 text-xxl uppercase md:border-t md:border-gris-400 md:pt-6">@lang('who.reviews.title')</h4>
    <article class="shadow rounded-lg px-3 py-2 md:text-left md:flex md:flex-wrap">
        <img src="@lang('who.reviews.cards.logo')" alt="" class="mx-auto my-5 md:ml-1" width="200">
        <p class="text-gris-300 text-lg pb-4 leading-normal">
            @lang('who.reviews.cards.review')</p>
        <hr class="hidden md:block md:w-9/12">
        <article class="border-t border-main-100 px-4 md:border-0 md:w-3/12">
            <h4 class="text-center font-bold text-main-100 pt-6 pb-2 text-lg md:pt-1">
                @lang('who.reviews.cards.author')</h4>
            <p class="text-center text-gris-300 text-lg pb-6 md:pb-1">
                @lang('who.reviews.cards.job')</p>
        </article>
    </article>
</section>

<script>
var WSCF = new Flickity( '#who_sub_carousel', {
  // options
  cellAlign: 'center',
  contain: true,
  prevNextButtons: false,
  wrapAround: true,
  autoPlay: true,
  adaptiveHeight: false,
  watchCSS: true
});

var WEF = new Flickity( '#who_exps', {
  // options
  cellAlign: 'center',
  contain: true,
  prevNextButtons: false,
  wrapAround: true,
  autoPlay: true,
  adaptiveHeight: false,
  watchCSS: true
});
</script>
<script defer>
    let who_banner = document.querySelector('.js-who_banner');
    const swapImgHome = (element) => {
        if (window.innerWidth > 768) {
            element.style.backgroundImage = "url({{ url('img/who.png') }})";
        } else {
            element.style.backgroundImage = "url({{ url('img/who_mobile.png') }})";
        }
    }
    window.addEventListener('load', () => {
        swapImgHome(who_banner);
    })
    window.addEventListener('resize', () => {
        swapImgHome(who_banner);
    })
</script>
@endsection
