<footer class="w-full bg-gris-700 text-center px-4 py-3">
    <section class="flex flex-col justify-center p-2 border-b border-main-100">
        <h4 class="text-sm text-gris-400 font-bold">Nuestros Clientes:</h4>
        <img class="bg-gris-300 m-2" src="" alt="logo1">
        <img class="bg-gris-300 m-2" src="" alt="logo2">
        <img class="bg-gris-300 m-2" src="" alt="logo3">
    </section>
    <section class="flex flex-col justify-center p-2 border-b border-main-100">
        <h4 class="text-base text-main-100 font-bold py-2 ">Nuestro Newsletter</h4>
        <form action="" method="post">
            @csrf
            <input class="rounded-full px-4 py-2 w-full bg-gray-100 placeholder-gris-500 text-sm mb-4" type="text" placeholder="mimail@mail.com">
            <button class="rounded-full w-full text-center text-gray-100 font-bold px-4 py-2 text-sm bg-main-100 mb-4" type="submit">Quiero suscribirme</button>
        </form>
    </section>
    <section class="flex flex-col justify-center p-2 text-center">
        <img src="" alt="">
        <h4 class="uppercase text-main-200 text-md py-3 font-bold">Argentina</h4>
        <ul class="font-bold uppercase text-main-200 text-sm">
            <li class="py-1">Buenos Aires</li>
            <li class="py-1">Rosario (Santa Fe)</li>
            <li class="py-1">Bariloche (Río Nregro)</li>
        </ul>
    </section>
    {{-- puto el que lee --}}
    <small class="text-sm text-gray-700 flex justify-center items-center"> <img class="w-3 h-3 mr-1" src="/img/copyright-regular.svg"> Copyright 2019 Ingmater </small>
</footer>
