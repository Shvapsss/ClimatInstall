<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1464336705,
    'checksum' => '4b0832d01c7df42c521d177dea37d5a7',
    'files' => [
        'templates/g5_hydrogen/custom/config/11' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/index.yaml',
                'modified' => 1464336702
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/layout.yaml',
                'modified' => 1464336702
            ],
            'page/assets' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/page/assets.yaml',
                'modified' => 1456746506
            ],
            'page/body' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/page/body.yaml',
                'modified' => 1456746506
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/11/styles.yaml',
                'modified' => 1456598928
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1463082536
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'page' => [
                'file' => 'templates/g5_hydrogen/config/default/page.yaml',
                'modified' => 1463082536
            ],
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1463082536
            ]
        ]
    ],
    'data' => [
        'page' => [
            'body' => [
                'doctype' => 'html',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ],
                'class' => 'gantry'
            ],
            'doctype' => 'html',
            'assets' => [
                'javascript' => [
                    0 => [
                        'location' => 'gantry-assets://custom/js/plan.js',
                        'inline' => '',
                        'in_footer' => '0',
                        'extra' => [
                            
                        ],
                        'name' => 'plancholder'
                    ]
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#3180c2',
                'color-2' => '#ef6c00'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'family=PT+Sans+Narrow&subset=cyrillic-ext,latin,cyrillic',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#1867a9',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#3180c2',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#142d53',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => 1
            ],
            'showcase' => [
                'background' => '#142d53',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset2'
        ],
        'particles' => [
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'branding' => [
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ],
                    'display' => [
                        'image' => [
                            'enabled' => 'show'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ]
                    ]
                ]
            ],
            'copyright' => [
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'enabled' => true
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'logo' => [
                'enabled' => '1',
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'menu' => [
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'mobileTarget' => 0
            ],
            'messages' => [
                'enabled' => true
            ],
            'mobile-menu' => [
                'enabled' => true
            ],
            'module' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'social' => [
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '_blank'
            ],
            'spacer' => [
                'enabled' => true
            ],
            'totop' => [
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'sample' => [
                'enabled' => true
            ]
        ],
        'index' => [
            'name' => '11',
            'timestamp' => 0,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home-climat',
                'timestamp' => 1456588474
            ],
            'positions' => [
                'title' => 'Module Position',
                'topcontakt' => 'Module Position',
                'slider' => 'Module Position',
                'predlagaem' => 'Widget Мы предалагем',
                'module-position' => 'Module Position',
                'mojem' => 'Module Position',
                'prosmet' => 'Module Position',
                'oshibki' => 'Получить консультацию',
                'slideset-1' => 'Module Position',
                'mymaps' => 'Module Position',
                'footer' => 'Module Position',
                'polcon' => 'Module Position',
                'contakt' => 'Контакт'
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home-climat',
                'timestamp' => 1456588474
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'logo-4680 12',
                        1 => 'position-position-8621 60',
                        2 => 'position-position-1734 28'
                    ]
                ],
                '/navigation/' => [
                    
                ],
                '/showcase-1/' => [
                    0 => [
                        0 => 'spacer-spacer-9494 40',
                        1 => 'menu-7687 33',
                        2 => 'spacer-spacer-7236 27'
                    ],
                    1 => [
                        0 => 'position-position-8498'
                    ],
                    2 => [
                        0 => 'position-module-1188'
                    ]
                ],
                '/showcase-2/' => [
                    0 => [
                        0 => 'custom-2729'
                    ]
                ],
                '/showcase-3/' => [
                    0 => [
                        0 => 'position-position-6440'
                    ],
                    1 => [
                        0 => 'position-position-4227'
                    ]
                ],
                '/feature/' => [
                    0 => [
                        0 => 'position-position-4371 65',
                        1 => 'position-position-8320 35'
                    ]
                ],
                '/subfeature-1/' => [
                    0 => [
                        0 => 'custom-7886'
                    ]
                ],
                '/subfeature-2/' => [
                    0 => [
                        0 => 'position-position-8030'
                    ]
                ],
                '/pricetitle/' => [
                    0 => [
                        0 => 'custom-7942'
                    ]
                ],
                '/price/' => [
                    0 => [
                        0 => 'position-module-6417'
                    ]
                ],
                '/posttitle/' => [
                    
                ],
                '/modstrah/' => [
                    
                ],
                '/subfeature-3/' => [
                    0 => [
                        0 => 'custom-4955'
                    ]
                ],
                '/main/' => [
                    0 => [
                        0 => 'position-position-6759'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'custom-1437'
                    ],
                    1 => [
                        0 => 'position-position-5496'
                    ],
                    2 => [
                        0 => 'position-position-9427'
                    ]
                ],
                '/footer-2/' => [
                    0 => [
                        0 => 'position-position-2319'
                    ],
                    1 => [
                        0 => 'spacer-3279 33.3',
                        1 => 'position-position-4134 33.3',
                        2 => 'spacer-1603 33.3'
                    ],
                    2 => [
                        0 => 'copyright-2857'
                    ]
                ],
                '/footer-3/' => [
                    
                ],
                '/footer-4/' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'top-head'
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase-1' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'showcase-2' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase-3' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'reclam-1'
                    ]
                ],
                'subfeature-1' => [
                    'type' => 'section',
                    'subtype' => 'feature',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'bgtit'
                    ]
                ],
                'subfeature-2' => [
                    'type' => 'section',
                    'subtype' => 'feature',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'pricetitle' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'bgtit'
                    ]
                ],
                'price' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'posttitle' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'modstrah' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature-3' => [
                    'type' => 'section',
                    'subtype' => 'feature',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => '2',
                        'class' => ''
                    ]
                ],
                'footer-2' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer-3' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer-4' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'logo-4680' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://logo.png'
                    ],
                    'block' => [
                        'id' => 'bl-logo',
                        'variations' => 'nomarginall'
                    ]
                ],
                'position-position-8621' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'title'
                    ],
                    'block' => [
                        'variations' => 'nopaddingall'
                    ]
                ],
                'position-position-1734' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'topcontakt'
                    ],
                    'block' => [
                        'variations' => 'nopaddingall'
                    ]
                ],
                'spacer-spacer-9494' => [
                    'block' => [
                        'class' => 'muthon'
                    ]
                ],
                'menu-7687' => [
                    'attributes' => [
                        'menu' => 'twomenu'
                    ],
                    'block' => [
                        'class' => 'muthon'
                    ]
                ],
                'spacer-spacer-7236' => [
                    'block' => [
                        'class' => 'muthon'
                    ]
                ],
                'position-position-8498' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'slider'
                    ],
                    'block' => [
                        'variations' => 'nopaddingall nomarginall'
                    ]
                ],
                'position-module-1188' => [
                    'title' => 'Module Instance',
                    'attributes' => [
                        'module_id' => '97',
                        'key' => 'module-instance'
                    ]
                ],
                'custom-2729' => [
                    'title' => 'Мы предлагаем',
                    'attributes' => [
                        'html' => '<div class="tithom">МЫ ПРЕДЛАГАЕМ</div>'
                    ],
                    'block' => [
                        'variations' => 'center nomarginall'
                    ]
                ],
                'position-position-6440' => [
                    'title' => 'Widget Мы предалагем',
                    'attributes' => [
                        'key' => 'predlagaem'
                    ]
                ],
                'position-position-4227' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'module-position'
                    ]
                ],
                'position-position-4371' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'mojem'
                    ],
                    'block' => [
                        'variations' => 'nopaddingall nomarginall'
                    ]
                ],
                'position-position-8320' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'prosmet'
                    ],
                    'block' => [
                        'id' => 'prsmet'
                    ]
                ],
                'custom-7886' => [
                    'title' => 'Title получить консультацию',
                    'attributes' => [
                        'html' => '<div class="tithom">ЛЕГКО ЛИ УСТАНОВИТЬ КОНДИЦИОНЕР?</div>'
                    ],
                    'block' => [
                        'variations' => 'nomarginall center'
                    ]
                ],
                'position-position-8030' => [
                    'title' => 'Получить консультацию',
                    'attributes' => [
                        'key' => 'oshibki'
                    ]
                ],
                'custom-7942' => [
                    'title' => 'Прайс лист титул',
                    'attributes' => [
                        'html' => '<a id="price"></a><div class="tithom"><a name="price" style="color: #666;">ПРАЙС ЛИСТ</a></div>'
                    ],
                    'block' => [
                        'id' => 'titprlist',
                        'variations' => 'nomarginall center'
                    ]
                ],
                'position-module-6417' => [
                    'title' => 'Module Instance',
                    'attributes' => [
                        'module_id' => '103',
                        'key' => 'module-instance'
                    ],
                    'block' => [
                        'variations' => 'nomarginall'
                    ]
                ],
                'custom-4955' => [
                    'title' => 'Title Отзывы',
                    'attributes' => [
                        'html' => '<a id="otziv"></a><div class="tithom">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</div>'
                    ],
                    'block' => [
                        'variations' => 'center nomarginall'
                    ]
                ],
                'position-position-6759' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'slideset-1'
                    ]
                ],
                'custom-1437' => [
                    'title' => 'Title Наши контакты',
                    'attributes' => [
                        'html' => '<a id="kontakt"></a><div class="tithom titpad">НАШИ КОНТАКТЫ</div>'
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'position-position-5496' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'mymaps'
                    ],
                    'block' => [
                        'class' => 'tpmap',
                        'variations' => 'nopaddingall nomarginall'
                    ]
                ],
                'position-position-9427' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'position-position-2319' => [
                    'title' => 'Module Position',
                    'attributes' => [
                        'key' => 'polcon'
                    ],
                    'block' => [
                        'variations' => 'nopaddingall nomarginall'
                    ]
                ],
                'position-position-4134' => [
                    'title' => 'Контакт',
                    'attributes' => [
                        'key' => 'contakt'
                    ],
                    'block' => [
                        'variations' => 'nopaddingall nomarginall center'
                    ]
                ],
                'copyright-2857' => [
                    'attributes' => [
                        'owner' => '2008-20016 Установка и обслуживание кондиционеров в Москве'
                    ],
                    'block' => [
                        'class' => 'copyr',
                        'variations' => 'nopaddingall nomarginall center'
                    ]
                ]
            ]
        ]
    ]
];
