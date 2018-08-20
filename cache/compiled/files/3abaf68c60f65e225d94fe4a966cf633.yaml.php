<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints/fields/repeater.yaml',
    'modified' => 1520537934,
    'data' => [
        'form' => [
            'fields' => [
                'header.repeater' => [
                    'name' => 'repeatedItemName',
                    'type' => 'list',
                    'style' => 'vertical',
                    'label' => 'Repeated item',
                    'fields' => [
                        '.text' => [
                            'type' => 'text',
                            'label' => 'A Simple text field'
                        ],
                        '.primary' => [
                            'type' => 'toggle',
                            'label' => 'A Simple toggle field',
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
        ]
    ]
];
