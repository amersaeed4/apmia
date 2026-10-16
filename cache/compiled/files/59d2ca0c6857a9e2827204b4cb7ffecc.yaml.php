<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/apmia/user/themes/apmia/blueprints/pages/document.yaml',
    'modified' => 1792150858,
    'size' => 994,
    'data' => [
        'title' => 'Document (PDF / download)',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'document' => [
                            'type' => 'tab',
                            'title' => 'Document',
                            'fields' => [
                                'header.file' => [
                                    'type' => 'filepicker',
                                    'label' => 'File',
                                    'help' => 'Upload the file on the Media tab / drop it here, then pick it. PDF, Word, Excel and PowerPoint are all fine.'
                                ],
                                'header.file_label' => [
                                    'type' => 'text',
                                    'label' => 'Download button title',
                                    'placeholder' => 'Defaults to the page title'
                                ],
                                'header.file_url' => [
                                    'type' => 'text',
                                    'label' => '…or an external file URL',
                                    'help' => 'Only used when no file is picked above.'
                                ],
                                'header.embed' => [
                                    'type' => 'toggle',
                                    'label' => 'Show inline PDF viewer',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
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
        ]
    ]
];
