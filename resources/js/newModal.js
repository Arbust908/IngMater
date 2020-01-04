/**
 *
 */
const newModal = (parent, [title, text, disclamer]) => {
    // Generar el modal
    let modal = document.createElement('aside');
    modal.classList.add('bg-white', 'p-3', 'shadow-lg', 'rounded-lg', 'flex', 'flex-col');

    let titulo = document.createElement('h2');
    titulo.innerHTML = title;

    let parrafo = document.createElement('p');
    parrafo.innerHTML = text;

    let mensaje = document.createElement('small');
    mensaje.innerHTML = disclamer;

    // Generar el backdrop
    let modalBackdrop = document.createElement('div');
    modalBackdrop.classList.add('bg-white', 'opacity-25', 'w-full','h-screen', 'flex', 'justify-center', 'items-center');


    // Ensamblado
    modal.appendChild(titulo);
    modal.appendChild(parrafo);
    modal.appendChild(mensaje);
    modalBackdrop.appendChild(modal);
    modalBackdrop.addEventListener('click', () => {
        parent.removeChild(modalBackdrop);
    });
    parent.appendChild(modalBackdrop);
}

