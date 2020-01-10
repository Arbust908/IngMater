<?php

return [
    'title' => 'Contact',
    'banner' => '/img/contact-sm.png',
    'map' => [
        'title' => 'Our Locations',
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
        'imgAlt' => 'Map of all out HeadQueaters'
    ],
    'form' => [
        'title' => 'CONTACT US',
        'inputs' => [
            [
                'label' => 'Name and surname:',
                'required' => 'true',
                'placeholder' => 'Juan Pardo',
                'type' => 'text',
                'name' => 'name'
            ],
            [
                'label' => 'Company:',
                'required' => 'false',
                'placeholder' => 'Company S.A.',
                'type' => 'text',
                'name' => 'company'
            ],
            [
                'label' => 'e-mail:',
                'required' => 'true',
                'placeholder' => 'jpardo@company.com',
                'type' => 'email',
                'name' => 'email'
            ],
            [
                'label' => 'Cell phone / Phone:',
                'required' => 'true',
                'placeholder' => 'ex.: +54 9 11 2222 2222 / +54 11 4444 4444',
                'type' => 'text',
                'name' => 'phone'
            ],
        ],
        'area' => 'Query:',
        'check' => 'I want to receive news about IngMater.',
        'btn' => 'Send'
    ],
];
