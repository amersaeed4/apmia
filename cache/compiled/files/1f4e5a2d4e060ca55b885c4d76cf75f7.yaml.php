<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/apmia/user/themes/apmia/blueprints/pages/modular/highlights.yaml',
    'modified' => 1792150858,
    'size' => 513,
    'data' => [
        'title' => 'Highlights Strip',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'items' => [
                            'type' => 'tab',
                            'title' => 'Highlights',
                            'fields' => [
                                'header.items' => [
                                    'type' => 'list',
                                    'label' => 'Highlights',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.value' => [
                                            'type' => 'text',
                                            'label' => 'Big text',
                                            'placeholder' => 'e.g. 1985'
                                        ],
                                        '.label' => [
                                            'type' => 'text',
                                            'label' => 'Caption'
                                        ]
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
