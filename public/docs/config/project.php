<?php
return array(
    'title'                   => 'Config',
    'subtitle'                => 'Usefull directives',
    'icon'                    => 'https://raw.githubusercontent.com/laravel/art/master/laravel-l-slant.png',
    'default_version'         => null, #null = latest
    'default_page_attributes' => array(
        'disqus' => true,
       # 'share_buttons' => ['facebook']
    ),
    'github'                  => array(
        'enabled'        => true,
        'username'       => 'laradic',
        'repository'     => 'config',
        'branches'       => [ 'master', 'develop'],
        'webhook_secret' => 'test',
        'exclude_tags'   => [],
        'start_at_tag'   => '1.0.0',
        'path_bindings'  => array(
            'logs'     => 'build/logs',
            'docs'     => 'resources/docs',
            'index_md' => 'README.md' # null for default, otherwise path relative to git root, ex: README.md OR documents/intro.md
        )
    )
);
