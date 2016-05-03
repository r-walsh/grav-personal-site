<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/config/plugins/archives.yaml',
    'modified' => 1460752254,
    'data' => [
        'enabled' => true,
        'built_in_css' => false,
        'date_display_format' => 'F jS Y',
        'show_count' => true,
        'limit' => 12,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ],
        'filter_combinator' => 'and',
        'filters' => [
            'category' => [
                0 => 'blog'
            ]
        ]
    ]
];
