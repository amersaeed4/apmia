<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/apmia/user/themes/apmia/blueprints/pages/modular/hero.yaml',
    'modified' => 1792150858,
    'size' => 1239,
    'data' => [
        'title' => 'Hero Slider',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'slides' => [
                            'type' => 'tab',
                            'title' => 'Slides',
                            'fields' => [
                                'header.autoplay' => [
                                    'type' => 'text',
                                    'label' => 'Seconds per slide',
                                    'default' => 6,
                                    'help' => 'Use 0 to disable auto-play.',
                                    'validate' => [
                                        'type' => 'int',
                                        'min' => 0,
                                        'max' => 60
                                    ]
                                ],
                                'header.slides' => [
                                    'type' => 'list',
                                    'label' => 'Slides',
                                    'help' => 'Upload images on this section first, then pick them here.',
                                    'style' => 'vertical',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'filepicker',
                                            'label' => 'Image',
                                            'preview_images' => true
                                        ],
                                        '.eyebrow' => [
                                            'type' => 'text',
                                            'label' => 'Small label'
                                        ],
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.text' => [
                                            'type' => 'textarea',
                                            'rows' => 2,
                                            'label' => 'Text'
                                        ],
                                        '.button_label' => [
                                            'type' => 'text',
                                            'label' => 'Button label'
                                        ],
                                        '.button_url' => [
                                            'type' => 'text',
                                            'label' => 'Button link'
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
