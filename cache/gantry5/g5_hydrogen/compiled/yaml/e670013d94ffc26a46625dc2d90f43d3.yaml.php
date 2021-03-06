<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/usr/home/httpd/climat-install/www/media/gantry5/engines/nucleus/blueprints/page/head.yaml',
    'modified' => 1463082545,
    'data' => [
        'name' => 'Head Properties',
        'description' => 'Settings that can be applied to the page.',
        'type' => 'global',
        'form' => [
            'fields' => [
                'meta' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Meta Tags',
                    'description' => 'Meta Tags for extras such as Facebook and Twitter.',
                    'key_placeholder' => 'og:title, og:site_name, twitter:site',
                    'value_placeholder' => 'Value',
                    'default' => NULL
                ],
                'head_bottom' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Custom Content',
                    'description' => 'Anything in this field will be appended to the <head>'
                ],
                'atoms' => [
                    'type' => 'input.hidden',
                    'override_target' => '#atoms .atoms-list + input[type="checkbox"]',
                    'array' => true
                ]
            ]
        ]
    ]
];
