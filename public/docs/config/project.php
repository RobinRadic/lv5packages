<?php
return array(
    'title' => 'Config',
    'subtitle' => 'Empower your settings',
    'icon' => 'https://raw.githubusercontent.com/laravel/art/master/laravel-l-slant.png',
    'default_version' => null,
    'default_page_attributes' => array(
        'somevar' => 'foo'
    ),


    'github' => array(
        'enabled'          => true,
        'branches'         => ['master'],
        'username'         => 'laradic',
        'repository'       => 'config',
        'exclude_tags'     => [],
        'start_at_tag'     => '1.0.0',
        'path_bindings'    => array(
            'logs' => 'build/logs',
            'docs' => 'docs',
            'index_md' => 'README.md' # null for default, otherwise path relative to git root, ex: README.md OR documents/intro.md
        )
    )
);



