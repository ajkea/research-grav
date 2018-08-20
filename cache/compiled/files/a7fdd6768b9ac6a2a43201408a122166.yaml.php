<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints/fields/file.yaml',
    'modified' => 1520623956,
    'data' => [
        'form' => [
            'fields' => [
                'header.fileupload' => [
                    'type' => 'file',
                    'label' => 'Upload a file',
                    'multiple' => false,
                    'destination' => 'user/pages/images',
                    'random_name' => false,
                    'avoid_overwriting' => false,
                    'limit' => 1,
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ]
        ]
    ]
];
