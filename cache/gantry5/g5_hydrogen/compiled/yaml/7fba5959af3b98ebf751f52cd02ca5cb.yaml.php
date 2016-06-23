<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/home/httpd/climat-install/www/media/gantry5/engines/nucleus/particles/custom.yaml',
    'modified' => 1463082545,
    'data' => [
        'name' => 'Custom HTML',
        'description' => 'Display custom HTML block.',
        'type' => 'particle',
        'icon' => 'fa-code',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'html' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Custom HTML',
                    'description' => 'Enter custom HTML into here.'
                ],
                'twig' => [
                    'type' => 'input.checkbox',
                    'label' => 'Process Twig',
                    'description' => 'Enable Twig template processing in the content. Twig will be processed before shortcodes.'
                ],
                'filter' => [
                    'type' => 'input.checkbox',
                    'label' => 'Process shortcodes',
                    'description' => 'Enable shortcode processing / filtering in the content.'
                ]
            ]
        ]
    ]
];
