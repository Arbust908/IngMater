<article class="w-full my-8 flex flex-col items-center lg:flex-row lg:flex-wrap lg:justify-between">

    <h3 class="text-main-100 text-lg text-center pb-3 lg:w-full lg:text-left">
        {{ $client['name'] }}
    </h3>

    <hr class="bg-gris-400 w-full mb-4">

    <img
        src="{{ url($client['logo']) }}"
        alt="{{$client['name']}} logo"
        data-limits="{{$client['logo-limits']}}"
        class="client-logo md:mx-2">

    <p class="text-gris-300 text-center text-base py-4 font-regular leading-relaxed lg:text-left md:max-w-lg">
        {{$client['desc']}}
    </p>

    <img
        src="{{ url($client['img']) }}"
        alt="Img {{$client['name']}}"
        class="shadow lg:max-w-lg" style="max-height: 250px">

</article>
