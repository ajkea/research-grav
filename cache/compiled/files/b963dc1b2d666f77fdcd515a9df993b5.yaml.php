<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints/divider-demo.yaml',
    'modified' => 1520540941,
    'data' => [
        'title' => 'Demo',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'replace@' => true
                        ],
                        'options' => [
                            'replace@' => true
                        ],
                        'advanced' => [
                            'replace@' => true
                        ],
                        'tab-columns' => [
                            'type' => 'tab',
                            'title' => 'Columns',
                            'fields' => [
                                'demo-colomns' => [
                                    'type' => 'section',
                                    'title' => 'Colomn divider',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'dividers/columns',
                                        'context' => 'blueprints://'
                                    ]
                                ]
                            ]
                        ],
                        'tab-fieldset' => [
                            'type' => 'tab',
                            'title' => 'Fieldset',
                            'fields' => [
                                'demo-fieldset' => [
                                    'type' => 'section',
                                    'title' => 'Fieldset divider',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'dividers/fieldset',
                                        'context' => 'blueprints://'
                                    ]
                                ]
                            ]
                        ],
                        'tab-section' => [
                            'type' => 'tab',
                            'title' => 'Section',
                            'fields' => [
                                'demo-section' => [
                                    'type' => 'section',
                                    'import@' => [
                                        'type' => 'dividers/section',
                                        'context' => 'blueprints://'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
