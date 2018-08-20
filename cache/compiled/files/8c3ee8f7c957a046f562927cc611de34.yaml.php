<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints.yaml',
    'modified' => 1520350162,
    'data' => [
        'name' => 'My Demo Theme',
        'version' => '0.1.0',
        'description' => 'A theme for the demo',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Kenneth Joris',
            'email' => 'kenneth.joris@pau.be'
        ],
        'homepage' => 'https://github.com/kenneth-joris/grav-theme-my-demo-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/kenneth-joris/grav-theme-my-demo-theme/issues',
        'readme' => 'https://github.com/kenneth-joris/grav-theme-my-demo-theme/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
