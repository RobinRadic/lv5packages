<?php
return array(
    'title'                   => 'Themes',
    'subtitle'                => 'Laravel 5 theme package',
    'icon'                    => 'https://raw.githubusercontent.com/laravel/art/master/laravel-l-slant.png',
    'default_version'         => 'master', #null = latest
    'default_page_attributes' => array(
        'disqus' => true,
        'layout' => 'default'
    ),
    'phpdoc'                  => array(
        'enabled'  => true,
        'xml_path' => 'phpdoc/structure.xml',
        'dir'      => 'phpdoc'
    ),
    'github'                  => array(
        'enabled'        => false,
        'username'       => 'laradic',
        'repository'     => 'themes',
        'branches'       => [ 'master' ],
        'webhook_secret' => 'test',
        'exclude_tags'   => [ ],
        'start_at_tag'   => 'v2.1.0',
        'path_bindings'  => array(
            'logs'     => 'build/logs',
            'docs'     => 'docs',
            'index_md' => 'README.md' # null for default, otherwise path relative to git root, ex: README.md OR documents/intro.md
        )
    )
);
