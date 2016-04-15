<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/config/site.yaml',
    'modified' => 1460491930,
    'data' => [
        'title' => 'ryanwalsh.io',
        'author' => [
            'name' => 'Ryan Walsh',
            'email' => 'ryan@thehatrack.net'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'rambling about code'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
