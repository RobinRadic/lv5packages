<?php
return array(
    'title'                   => 'Blade Extensions',
    'subtitle'                => 'Usefull directives',
    'icon'                    => 'https://raw.githubusercontent.com/laravel/art/master/laravel-l-slant.png',
    'default_version'         => '2.1', #null = latest
    'default_page_attributes' => array(
        'disqus' => true,
        'layout' => 'default'
    ),
    'phpdoc'                  => array(
        'enabled'  => true,
        'layout'   => 'phpdoc',
        'github_xml_path' => 'resources/docs/phpdoc/structure.xml',
        'dir'      => 'phpdoc'
    ),
    'github'                  => array(
        'enabled'        => true,
        'username'       => 'robinradic',
        'repository'     => 'blade-extensions',
        'branches'       => [ 'master', 'develop'],
        'webhook_secret' => 'test',
        'exclude_tags'   => [],
        'start_at_tag'   => 'v2.1.0',
        'path_bindings'  => array(
            'docs'     => 'resources/docs',
            'index_md' => 'README.md' # null for default, otherwise path relative to git root, ex: README.md OR documents/intro.md
        )
    )
);
