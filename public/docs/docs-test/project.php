<?php
return array(
    'title' => 'TEST',
    'default_version' => null, #null = latest
    'default_page_attributes' => array(
        'somevar' => 'foo'
    ),

    'github' => array(
        'enabled'          => true,
        'branches'         => ['master', 'develop'],
        'username'         => 'laradic',
        'repository'       => 'docs-test',
        'webhook_secret' => 'test',
        'exclude_tags'     => [],
        'start_at_tag'     => 'v1.1.0',
        'path_bindings'    => array(
            'logs' => 'build/logs',
            'docs' => 'docs',
            'index_md' => 'README.md' # null for default, otherwise path relative to git root, ex: README.md OR documents/intro.md
        )
    )
);
