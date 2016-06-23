<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/home/httpd/climat-install/www/media/gantry5/engines/nucleus/particles/logo.yaml',
    'modified' => 1463082545,
    'data' => [
        'name' => 'Logo / Image',
        'description' => 'Display a logo or an image.',
        'type' => 'particle',
        'icon' => 'fa-file-image-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable logo particles.',
                    'default' => true
                ],
                'url' => [
                    'type' => 'input.text',
                    'label' => 'Url',
                    'description' => 'Url for the image. Leave empty to go to home page.'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select desired logo image.'
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Text',
                    'description' => 'Input logo description text.'
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Set a specific CSS class for custom styling.'
                ]
            ]
        ]
    ]
];
