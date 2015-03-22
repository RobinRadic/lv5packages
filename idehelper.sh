#!/bin/sh
lv clear-compiled
lv vendor:publish --provider=barryvdh/laravel-ide-helper --tag=config
lv ide-helper:generate
lv optimize
