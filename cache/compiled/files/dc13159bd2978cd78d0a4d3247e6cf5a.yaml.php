<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints/dividers/fieldset.yaml',
    'modified' => 1520514277,
    'data' => [
        'form' => [
            'fields' => [
                'header.fieldset' => [
                    'type' => 'fieldset',
                    'title' => 'Your title',
                    'help' => 'Help text',
                    'info' => 'Info text',
                    'text' => 'Text inside fieldset and before other fields',
                    'icon' => 'comments',
                    'collapsed' => true,
                    'collapsible' => true,
                    'fields' => [
                        'header.fieldset.an_example_text' => [
                            'type' => 'text',
                            'label' => 'text'
                        ],
                        'header.fieldset.an_example_textarea' => [
                            'type' => 'textarea',
                            'label' => 'textarea'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
