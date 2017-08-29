<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'P:/OpenServer/domains/VMG-metall-uikit-grav/user/themes/vmg-metall/blueprints/catalog-card.yaml',
    'modified' => 1503967653,
    'data' => [
        'title' => 'Product',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'product' => [
                            'type' => 'tab',
                            'title' => 'Карточка Товара',
                            'fields' => [
                                'header.published' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                    'help' => 'PLUGIN_ADMIN.PUBLISHED_HELP',
                                    'highlight' => 1,
                                    'size' => 'medium',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.model' => [
                                    'type' => 'text',
                                    'label' => 'Модель Товара'
                                ],
                                'header.sub_model' => [
                                    'type' => 'text',
                                    'label' => 'Вид Товара'
                                ],
                                'header.price' => [
                                    'type' => 'text',
                                    'label' => 'Цена'
                                ],
                                'content' => [
                                    'type' => 'markdown',
                                    'validate' => [
                                        'type' => 'textarea'
                                    ],
                                    'label' => 'Описание Товара'
                                ],
                                'uploads' => [
                                    'type' => 'pagemedia',
                                    'label' => 'PLUGIN_ADMIN.PAGE_MEDIA'
                                ]
                            ]
                        ],
                        'sortable' => [
                            'type' => 'tab',
                            'title' => 'Сортировка Товара',
                            'fields' => [
                                'order_title' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.ORDERING',
                                    'underline' => true
                                ],
                                'ordering' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX',
                                    'help' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'order' => [
                                    'type' => 'order',
                                    'label' => 'PLUGIN_ADMIN.SORTABLE_PAGES',
                                    'sitemap' => NULL
                                ],
                                'route' => [
                                    'type' => 'select',
                                    'label' => 'Категория Товара',
                                    'classes' => 'fancy',
                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                                    '@data-default' => '\\Grav\\Plugin\\admin::route',
                                    'options' => [
                                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
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