<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/blueprints/config/site.yaml',
    'modified' => 1517255170,
    'data' => [
        '@extends' => '@parent',
        'form' => [
            'fields' => [
                'company' => [
                    'type' => 'section',
                    'title' => 'Company details (shown on website)',
                    'underline' => true,
                    'fields' => [
                        'street' => [
                            'type' => 'text',
                            'label' => 'Street + Number',
                            'size' => 'large'
                        ],
                        'city' => [
                            'type' => 'text',
                            'label' => 'Postcode + City',
                            'size' => 'large'
                        ],
                        'country' => [
                            'type' => 'text',
                            'label' => 'Country',
                            'size' => 'large'
                        ],
                        'telephone' => [
                            'type' => 'text',
                            'label' => 'Telephone number (numbers only)',
                            'size' => 'large'
                        ],
                        'email' => [
                            'type' => 'text',
                            'label' => 'Email',
                            'size' => 'large'
                        ],
                        'vat' => [
                            'type' => 'text',
                            'label' => 'Bank account number',
                            'size' => 'large'
                        ],
                        'bic' => [
                            'type' => 'text',
                            'label' => 'Bank account number (bic)',
                            'size' => 'large'
                        ],
                        'tax' => [
                            'type' => 'text',
                            'label' => 'Tax number',
                            'size' => 'large'
                        ]
                    ]
                ],
                'social' => [
                    'type' => 'section',
                    'title' => 'Company social links (shown on website)',
                    'underline' => true,
                    'fields' => [
                        'facebook' => [
                            'type' => 'text',
                            'label' => 'Facebook link',
                            'size' => 'large'
                        ],
                        'linkedin' => [
                            'type' => 'text',
                            'label' => 'Linkedin link',
                            'size' => 'large'
                        ],
                        'twitter' => [
                            'type' => 'text',
                            'label' => 'Twitter link',
                            'size' => 'large'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
