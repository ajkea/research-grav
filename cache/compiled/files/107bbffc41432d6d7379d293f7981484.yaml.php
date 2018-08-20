<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-demo/user/themes/my-demo-theme/blueprints/fields-demo.yaml',
    'modified' => 1520539673,
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
                            'fields' => [
                                'header.title' => [
                                    'replace@' => true
                                ],
                                'content' => [
                                    'replace@' => true
                                ],
                                'header.media_order' => [
                                    'replace@' => true
                                ],
                                'colorpicker' => [
                                    'type' => 'section',
                                    'title' => 'Colorpicker field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/colorpicker',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'datetime' => [
                                    'type' => 'section',
                                    'title' => 'Date & time field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/datetime',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'display' => [
                                    'type' => 'section',
                                    'title' => 'Display field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/display',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'file' => [
                                    'type' => 'section',
                                    'title' => 'File field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/file',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'filepicker' => [
                                    'type' => 'section',
                                    'title' => 'Filepicker field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/filepicker',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'pagemediaselect' => [
                                    'type' => 'section',
                                    'title' => 'Page media select field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/pagemediaselect',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'pageselect' => [
                                    'type' => 'section',
                                    'title' => 'Page select field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/pages',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'repeater' => [
                                    'type' => 'section',
                                    'title' => 'Repeater field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/repeater',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'selectize' => [
                                    'type' => 'section',
                                    'title' => 'Selectize field (tag field)',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/selectize',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'taxonomy' => [
                                    'type' => 'section',
                                    'title' => 'Taxonomy field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/taxonomy',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'text' => [
                                    'type' => 'section',
                                    'title' => 'Text field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/text',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'textarea' => [
                                    'type' => 'section',
                                    'title' => 'Textarea field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/textarea',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'tinymce' => [
                                    'type' => 'section',
                                    'title' => 'TinyMCE field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/tinymce',
                                        'context' => 'blueprints://'
                                    ]
                                ],
                                'toggle' => [
                                    'type' => 'section',
                                    'title' => 'Toggle field',
                                    'underline' => true,
                                    'import@' => [
                                        'type' => 'fields/toggle',
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
