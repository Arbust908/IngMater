<footer class="w-full bg-gris-700 text-center px-4 pt-3 pb-20">
    <section class="flex flex-col justify-center p-2 border-b border-main-100">
        <h4 class="text-base text-main-100 font-bold py-2 leading-normal pb-1">
            “Asesorando a empresas acerca de Ingeniería y Ciencia de los materiales”
        </h4>

    </section>
    <section class="flex flex-col justify-center p-2 border-b border-main-100">
        <h4 class="text-base text-main-100 font-bold py-2 ">Nuestro Newsletter</h4>
        <form action="" method="post">
            @csrf
            <input class="rounded-full px-4 py-2 w-full bg-gray-100 placeholder-gris-500 text-sm mb-4" type="text" placeholder="mimail@mail.com">
            <button class="rounded-full w-full text-center text-gray-100 font-bold px-4 py-2 text-sm bg-main-100 mb-4" type="submit">Quiero suscribirme</button>
        </form>
    </section>
    <section class="flex flex-col justify-center pt-10 px-2 text-center">
        <img src="/img/map-marker-alt-solid.svg" alt="Icono de posicion">
        <h4 class="uppercase text-main-200 text-lg py-3 font-bold">Argentina</h4>
        <ul class="font-bold uppercase text-main-200 text-sm">
            <li class="py-1 text-base">Villa Ballester (Buenos Aires)</li>
            <li class="py-1 text-base">Rosario (Santa Fe)</li>
            <li class="py-1 text-base">Bariloche (Río Nregro)</li>
        </ul>
    </section>
    {{-- puto el que lee --}}
    <small class="text-sm text-gray-700 flex justify-center items-center font-bold pt-4"> <img class="w-3 h-3 mr-1" src="/img/copyright-regular.svg"> Copyright 2019 Ingmater </small>
</footer>
