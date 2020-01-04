<script>
    /**
     *
     */
    const newModal = (parent, [title = null , text = null , disclamer = null]) => {
        // Generar el modal
        let modal = document.createElement('aside');
        modal.classList.add('bg-white', 'p-3', 'shadow-lg', 'rounded-xxl', 'flex', 'flex-col', 'mx-6', 'lg:w-4/12', 'px-12', 'text-center', 'relative');

        let close = document.createElement('i');
        close.classList.add('fas', 'fa-times', 'absolute', 'top-0', 'right-0', 'pr-4', 'pt-4', 'text-gris-600', 'hover:text-red-600', 'transition');
        modal.appendChild(close);

        if(title != null) {
            let titulo = document.createElement('h2');
            titulo.innerHTML = title;
            titulo.classList.add('text-main-200', 'py-4', 'mt-2', 'font-bold', 'text-lg');
            modal.appendChild(titulo);
        }

        if (text != null) {
            let parrafo = document.createElement('p');
            parrafo.innerHTML = text;
            parrafo.classList.add('text-gris-300', 'text-base', 'mt-2');
            modal.appendChild(parrafo);
        }

        let logo = document.createElement('img');
        logo.setAttribute('src', "/img/logo.png");
        logo.setAttribute('alt', "Logo de IngMater");
        logo.setAttribute('width', '86px');
        logo.setAttribute('title', 'IngMater');
        logo.classList.add('mx-auto', 'my-4');
        modal.appendChild(logo);


        if (disclamer != null) {
            let mensaje = document.createElement('small');
            mensaje.innerHTML = disclamer;
            mensaje.classList.add('text-gris-400', 'text-sm', 'border-t', 'border-gris-800', 'pt-2', 'mt-2');
            modal.appendChild(mensaje);
        }

        // Generar el backdrop
        let modalBackdrop = document.createElement('div');
        modalBackdrop.classList.add('backdrop-modal', 'w-full', 'h-screen', 'flex', 'justify-center', 'items-center', 'absolute', 'inset-0');


        // Ensamblado
        modalBackdrop.appendChild(modal);
        modalBackdrop.addEventListener('click', () => {
            parent.removeChild(modalBackdrop);
        });
        parent.appendChild(modalBackdrop);
    }
</script>
