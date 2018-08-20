<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints/fields/toggle.yaml',
    'modified' => 1520542239,
    'data' => [
        'form' => [
            'fields' => [
                'header.toggle' => [
                    'type' => 'toggle',
                    'label' => 'A simple boolean toggle',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Yes',
                        0 => 'No'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
