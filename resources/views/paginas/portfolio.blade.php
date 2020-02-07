@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <section
        class="md:h-64 w-full px-2 py-12 bg-left-top bg-cover bg-repeat md:bg-center"
        style="background-image: url({{ url(__('portfolio.banner')) }});">
        <div class="flex flex-col lg:justify-center text-white text-center md:w-1/2 md:mr-auto lg:h-full">
            <h1 class="font-bold leading-normal text-xxl uppercase lg:text-xxxl lg:text-left lg:pl-40">
                @lang('portfolio.title')
            </h1>
        </div>
    </section>
    <section class="w-full py-8 p-b px-6 font-bold lg:px-20 xl:px-40">
        <p class="text-main-100 text-lg text-center lg:text-left pb-8">
            @lang('portfolio.subtitle')
        </p>
        @each('paginas.components.portfolio_card', __('portfolio.clients'), 'client')
    </section>
</div>
<script>

    let logos = document.querySelectorAll('img.client-logo');
    // // console.log(logos);

    const setWidth = (elem) => {
        // // console.group();
        // // console.log(elem);
        // // console.log();

        let sm_width = elem.dataset.limits.split('-')[0];
        let lg_width = elem.dataset.limits.split('-')[1];

        // // console.log(sm_width);
        // // console.log(lg_width);
        // // console.log(window.innerWidth);

        if (window.innerWidth >= 768) {
            elem.width = lg_width;
        } else {
            elem.width = sm_width;
        }
        // // console.groupEnd();
    }

    const renderLogos = () => {
        logos.forEach( logo => {
            setWidth(logo);
        });
    }

    renderLogos();
    window.addEventListener('resize', () => {
        renderLogos();
    })


</script>
@endsection
