<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'P:/OpenServer/domains/VMG-metall-uikit-grav/user/themes/vmg-metall/blueprints.yaml',
    'modified' => 1504010688,
    'data' => [
        'name' => 'vmg-metall',
        'version' => '2.1.1',
        'description' => '',
        'icon' => 'empire',
        'author' => [
            'name' => 'SidMorris',
            'email' => 'sidmorris@mail.ru',
            'url' => NULL
        ],
        'homepage' => NULL,
        'demo' => NULL,
        'keywords' => 'vmg-metall',
        'bugs' => NULL,
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
