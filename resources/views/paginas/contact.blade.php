@extends('layouts.app')

@section('content')
<main class="md:flex md:flex-wrap md:justify-center">
    <section class="flex justify-center items-center relative pt-5 pb-6 bg-no-repeat bg-top bg-cover md:w-full md:order-1 "
    style="background-image: url({{ url('img/contacto_mobile.png') }});" id="contact_bg">
    <article class="w-full text-center relative z-10 text-main-100 py-4">
        <h2 class="text-xxl font-bold uppercase flex items-center justify-center md:w-10/12 md:mx-auto md:justify-start md:text-xxxl md:py-6">
            {{ __('contact.title') }}
            <a href="https://www.linkedin.com/company/ingmater-consultores/" target="_blank" class="-ml-2">
                <span class="group fa-stack fa transition">
                    <i class="fas fa-square fa-stack-1x text-white group-hover:text-main-200"></i>
                    <i class="fab fa-linkedin fa-stack-1x group-hover:text-white"></i>
                </span>
            </a>
        </h2>
    </article>
</section>
<section
    class="px-6 pt-5 mb-12
    md:order-3 md:pt-10 md:w-5/12 md:ml-20"
>
    <h4 class="text-main-100 text-lg uppercase pb-2 border-b border-main-100 mb-8 font-bold">
        @lang('contact.form.title')
    </h4>
    <form id="contact">
        @csrf
        @foreach (__('contact.form.inputs') as $input)
        <fieldset>
            <label for="{{ $input['name'] }}" class="text-gris-300 w-full pb-3 inline-block">
                {{$input['label']}}
                <span class="text-red-500">
                    {{ $input['required'] === 'true' ? '*' : '' }}
                </span>
            </label>
            <input
            type="{{ $input['type'] }}"
            {{ $input['required'] === 'true' ? 'required' : '' }}
            placeholder="{{ $input['placeholder'] }}"
            name="{{ $input['name'] }}"
            contactinput
            class="border border-gris-800 py-2 px-4 rounded-full w-full mb-4">
        </fieldset>
        @endforeach
        <fieldset>
            <label for="query" class="text-gris-300 w-full pb-3 inline-block">
                @lang('contact.form.area')
                <span class="text-red-500">*</span>
            </label>
            <textarea name="query" rows="12" contactinput validationMessage="Tenes que completar el campo" class="border border-gris-800 py-2 px-4 rounded-xl w-full mb-4"></textarea>
        </fieldset>
        <div class="px-4 flex flex-col justify-center md:flex-row md:justify-between md:items-center">
            <div class="mb-10 md:mb-0">
                <button id="contact_check" class="font-bold text-main-100 pr-1">
                    <i class="far fa-square"></i>
                </button>
                <input type="hidden" name="news" value="false" contactinput>
                <label for="news" class="text-gris-300">
                    @lang('contact.form.check')
                </label>
            </div>
            <button class="text-xl font-bold py-2 px-10 rounded-full bg-main-100 text-white mx-auto inline-block md:mr-0" id="contact-btn">
                @lang('contact.form.btn')
            </button>
        </div>
        <script>
            const checkbox = document.getElementById('contact_check');
            const boxIcon = checkbox.querySelector('i.far');
            const newsValue = document.querySelector('input[name="news"]');
            checkbox.addEventListener('click', (eve) => {
                eve.preventDefault()
                boxIcon.classList.toggle('fa-check-square')
                boxIcon.classList.toggle('fa-square')
                newsValue.value = newsValue.value === 'false'
                ? 'true'
                : 'false'
            })
        </script>
    </form>
</section>
<section
    class="px-6
    md:order-2 md:pt-10 md:w-4/12 md:mr-20"
>
    <h4 class="text-main-100 text-lg uppercase pb-2 border-b border-main-100 mb-8 font-bold text-center">
        @lang('contact.map.title')
    </h4>
    <article class="flex flex-col justify-center font-bold text-main-200 text-center text-xl mb-6">
        @foreach (__('contact.map.hqs') as $hq)
        <h5 class="pb-4">
            {{ $hq['location'] }} -
            <span class="uppercase">{{ $hq['province'] }}</span>
        </h5>
        @endforeach
    </article>
    <article class="pb-12">
        <img src="/img/envelope-solid.svg" alt="" class="mx-auto mb-5" height="30" width="40">
        <h5 class="text-center font-bold text-main-100 pb-6 text-xl">
            <a href="mailto:contacto@ingmater.com">
                @lang('who.map.mail')
            </a>
        </h5>
        <h4 class="text-center font-bold text-main-100 pb-1 text-lg uppercase">
            @lang('who.map.hq.location')
        </h4>
        <p class="text-center text-gris-300 text-lg">
            <a href="tel:+54 9 11 5953-9770">
                @lang('who.map.hq.phone')
            </a>
        </p>
    </article>
    <article class="pb-12">
        <img src="/img/mapa-contact.png" alt="@lang('contact.map.imgAlt')" class="rounded-lg shadow">
    </article>
</section>
<script name="ct_script">
    let ct_padre = document.querySelector('body');
    const ct_btn = document.querySelector('#contact-btn');
    const ct_inputs = document.querySelectorAll('[contactinput]');
    const ct_csrf = document.querySelector('[name="_token"]');

    ct_inputs.forEach(ct_input => {
        ct_input.addEventListener('focus', () => {
            if( ct_input.classList.contains('border-red-600') ) {
                resetInputErrors(ct_input);
            }
        })
    });
    ct_btn.addEventListener('click', (event) => {
        event.preventDefault();
        ct_btn.setAttribute('disabled', true);
        let fd = new FormData();
        const ct_csrf = document.querySelector('[name="_token"]');
        fd.set(ct_csrf.name, ct_csrf.value);
        // console.log(document.getElementById('newsletter').elements);
        const data = [...document.querySelectorAll('[contactinput]')];
        let errors = [];
        data.forEach(input => {
            // console.warn('Input');
            // console.group();
            // console.log(input);
            // console.log('Nombre');
            // console.log(input.name);
            // console.log('Valor');
            // console.log(input.value);
            // console.groupEnd();
            if (!input.checkValidity()) {
                // console.error(input.name + ' no Valida');
                showInputErrors(input);
                errors.push(input);
            } else {
                // console.info(input.name + ' Valida!');
                fd.set(input.name, input.value);
            }
        });
        const textArea = document.querySelector('textarea[contactinput]')
        if (textArea.value.length <= 0) {
                console.error(textArea.name + ' no Valida');
                showInputErrors(textArea);
                errors.push(textArea);
            } else {
                console.info(textArea.name + ' Valida!');
                fd.set(textArea.name, textArea.value);
            }
        // console.log(errors);
        if (errors.length <= 0) {
            asyncForm(fd);
        }
        ct_btn.removeAttribute('disabled');
    });
    const asyncForm = (formData) => {
        fetch('/ct_mail/', { // a donde
            method: 'POST', // como
            body: formData // que
        })

        .then((response) => {
            if (response.status !== 200) {
                throw new Error(response.status)
            }
            ct_btn.removeAttribute('disabled');
            //Input Cleaner

            ct_inputs.forEach(ct_input => {
                resetInputErrors(ct_input);
            });

            // Modal -> Exito!
            newModal(ct_padre , [
            "@lang('modal.title')",
            "@lang('modal.msg')",
            "@lang('modal.disclamer')"
            ]);
            // console.log(response);
            // console.log('Exito');
        })

        .catch( () => {
            ct_btn.removeAttribute('disabled');
            // Modal -> Falla!
            newModal(ct_padre , [
            "@lang('modal.fail')",
            "@lang('modal.fail-msg')"
            ]);
            // console.log('Falla');
        })
    }
    const showInputErrors = (input) => {
        console.info(input.name);
        input.value = input.name === 'query' ? "@lang('validation.queryValidation')" : "@lang('validation.inputValidation')";
        input.classList.remove('border-gris-800')
        input.classList.add('border-red-600')
        input.classList.add('text-red-600')
    }
    const resetInputErrors = (input) => {
        input.value = '';
        input.classList.add('border-gris-800')
        input.classList.remove('border-red-600')
        input.classList.remove('text-red-600')
    }
</script>
<script>
    const ct_bg = document.getElementById('contact_bg');
    const ct_bgSrc = "{{ url(__('contact.banner')) }}";
    const ct_bgSrcLg = ct_bgSrc.replace("sm", "lg");


    const switchBG = () => {
        if (window.innerWidth >= 768) {
            ct_bg.style = "background-image: url("+ ct_bgSrcLg +");"
        } else {
            ct_bg.style = "background-image: url("+ ct_bgSrc +");"
        }
    }

    window.onresize = switchBG();
</script>
</main>
@endsection
