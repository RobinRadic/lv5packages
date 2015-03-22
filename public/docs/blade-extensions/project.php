<?php
return array(
    'title'                   => 'Blade Extensions',
    'subtitle'                => 'Usefull directives',
    'icon'                    => 'https://raw.githubusercontent.com/laravel/art/master/laravel-l-slant.png',
    'default_version'         => '2.1', #null = latest
    'default_page_attributes' => array(
        'disqus' => true,
       # 'share_buttons' => ['facebook']
    ),
    'github'                  => array(
        'enabled'        => true,
        'username'       => 'robinradic',
        'repository'     => 'blade-extensions',
        'branches'       => [ 'develop'],
        'webhook_secret' => 'test',
        'exclude_tags'   => [],
        'start_at_tag'   => 'v2.1.0',
        'path_bindings'  => array(
            'logs'     => 'build/logs',
            'docs'     => 'docs',
            'index_md' => 'README.md' # null for default, otherwise path relative to git root, ex: README.md OR documents/intro.md
        )
    )
);
