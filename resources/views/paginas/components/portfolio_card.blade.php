<article class="mx-auto w-8/12 lg:w-full mb-12 flex flex-col items-center lg:flex-row lg:flex-wrap lg:justify-between">

    <h3 class="text-main-100 text-lg text-center pb-3 lg:w-full lg:text-left">
        {{ $client['name'] }}
    </h3>

    <hr class="bg-gris-400 w-full mb-4">
    <article class="flex flex-col lg:flex-row items-center lg:justify-between w-full">
        <img
            src="{{ url($client['logo']) }}"
            alt="{{$client['name']}} logo"
            data-limits="{{$client['logo-limits']}}"
            class="client-logo md:mx-2">
    
        <p class="text-gris-300 text-center text-base p-4 pl-6 font-regular leading-loose lg:text-left md:max-w-xl">
            {{$client['desc']}}
        </p>
    
        <img
            src="{{ url($client['img']) }}"
            alt="Img {{$client['name']}}"
            class="shadow lg:max-w-lg rounded-xl" style="max-height: 250px">
    </article>

</article>
