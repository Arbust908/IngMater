<footer class="w-full bg-gris-700 text-center px-4 pt-3 pb-20 md:flex md:pb-6 self-end">
    <section class="flex flex-col justify-center p-2 border-b border-main-100 md:order-2 md:w-1/3 md:border-l md:border-b-0">
        <h4 class="text-base text-main-100 font-bold py-2 leading-normal pb-1">
            @lang('footer.inspiration')
        </h4>

    </section>
    <section class="flex flex-col justify-center p-2 border-b border-main-100 md:order-3 md:w-1/3 md:border-l md:border-b-0">
        <h4 class="text-base text-main-100 font-bold py-2 ">
            @lang('footer.newsletter')
        </h4>
        <form action="" method="post" id="newsletter">
            @csrf
            <input class="rounded-full px-4 py-2 w-full bg-gray-100 placeholder-gris-500 text-sm mb-4 md:max-w-xs md:mx-auto" type="text" placeholder="mimail@mail.com" name="email">
            <button class="rounded-full w-full text-center text-gray-100 font-bold px-4 py-2 text-sm bg-main-100 mb-4 md:max-w-xs md:mx-auto" type="submit">
                @lang('footer.subscribe')
            </button>
        </form>
    </section>
    <section class="flex flex-col justify-center pt-10 px-2 text-center md:order-1 md:w-1/3 md:flex-row md:flex-wrap md:pt-2">
        <img src="/img/map-marker-alt-solid.svg" alt="Icono de posicion" class="mx-auto md:w-1/12 md:mr-3 md:ml-0" style="max-width: 22px">
        <h4 class="uppercase text-main-200 text-lg py-3 font-bold ">Argentina</h4>
        <ul class="font-bold uppercase text-main-200 text-sm md:flex md:flex-wrap md:justify-center">
            <li class="py-1 text-base md:w-full">Villa Ballester (Buenos Aires)</li>
            <li class="py-1 text-base md:w-1/2">Rosario (Santa Fe)</li>
            <li class="py-1 text-base md:w-1/2">Bariloche (Río Nregro)</li>
        </ul>
        <small class="text-sm text-gray-700 flex justify-center items-center font-bold pt-4"> <img class="w-3 h-3 mr-1" src="/img/copyright-regular.svg"> Copyright 2019 Ingmater </small>
    </section>
</footer>
<script name="nw_script">
    let nw_padre = document.querySelector('body');
    const nw_btn = document.querySelector('#newsletter>button');
    nw_btn.addEventListener('click', (event) => {
        event.preventDefault();
        nw_btn.setAttribute('disabled', true);
        let fd = new FormData();
        // console.log(document.getElementById('newsletter').elements);
        const data = [...document.getElementById('newsletter').elements];

        data.forEach(input => {
            // console.log(input);
            // console.log(input.name);
            // console.log(input.value);
            fd.set(input.name, input.value);
        });

        fetch('/nl_mail/', { // a donde
            method: 'post', // como
            body: fd // que
        })

        .then((response) => {
            if (response.status !== 200) {
                throw new Error(response.status)
            }
            nw_btn.removeAttribute('disabled');
            let input = document.querySelector('#newsletter>input');
            input.value = '';
            // Modal -> Exito!
            newModal(nw_padre , [
                "@lang('modal.title')",
                "@lang('modal.msg')",
                "@lang('modal.disclamer')"
            ]);
            console.log(response);
            console.log('Exito');
        })

        .catch( () => {
            nw_btn.removeAttribute('disabled');
            // Modal -> Falla!
            newModal(nw_padre , [
                "@lang('modal.fail')",
                "@lang('modal.fail-msg')"
            ]);
            console.log('Falla');
        })
    });
</script>
