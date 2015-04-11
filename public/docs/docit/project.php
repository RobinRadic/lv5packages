<?php
return array(
    'title'                   => 'DocIt',
    'subtitle'                => 'Documentation generator',
    'icon'                    => 'https://raw.githubusercontent.com/laravel/art/master/laravel-l-slant.png',
    'default_version'         => 'master', #null = latest
    'default_page_attributes' => array(
        'disqus' => true,
       # 'share_buttons' => ['facebook']
    ),
    'github'                  => array(
        'enabled'        => false,
        'username'       => 'robinradic',
        'repository'     => 'blade-extensions',
        'branches'       => [ 'master', 'develop'],
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
