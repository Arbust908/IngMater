<?php

return [
    'title' => 'Contacto',
    'banner' => '/img/contact-sm.png',
    'map' => [
        'title' => 'Nuestras Sedes',
        'hqs' => [
            'bsas' => [
                'location' => 'Villa Ballester',
                'province' => 'Buenos Aires',
                'phone1' => 'Tel: +54 9 11 5953-9770',
                'phone2' => 'Tel: +54 9 11 2386-1683'
            ],
            'snfe' => [
                'location' => 'Rosario',
                'province' => 'Santa Fe',
                'phone1' => 'Tel: +54 9 341 644-8691'
            ],
            'rino' => [
                'location' => 'Bariloche',
                'province' => 'Rio Negro',
                'phone1' => 'Tel: +54 9 11 6921-9174'
            ]
        ],
        'contact' => 'contacto@ingmater.com',
        'imgAlt' => 'Mapa de todas nuestras Sedes'
    ],
    'form' => [
        'title' => 'Comunicate con nosotros',
        'inputs' => [
            [
                'label' => 'Nombre y apellido:',
                'required' => 'true',
                'placeholder' => 'Juan Pardo',
                'type' => 'text',
                'name' => 'name'
            ],
            [
                'label' => 'Empresa:',
                'required' => 'false',
                'placeholder' => 'Empresa S.A.',
                'type' => 'text',
                'name' => 'company'
            ],
            [
                'label' => 'e-mail:',
                'required' => 'true',
                'placeholder' => 'jpardo@empresa.com',
                'type' => 'email',
                'name' => 'email'
            ],
            [
                'label' => 'Celular / teléfono:',
                'required' => 'true',
                'placeholder' => 'ex.: +54 9 11 2222 2222 / +54 11 4444 4444',
                'type' => 'text',
                'name' => 'phone'
            ],
        ],
        'area' => 'Consulta:',
        'check' => 'Quiero recibir noticias sobre IngMater',
        'btn' => 'Enviar'
    ],
];
