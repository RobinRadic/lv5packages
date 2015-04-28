## Install

- have a working database configured
- `composer require laradic/docit`
- `Laradic\Config\ConfigServiceProvider` & `Laradic\Support\SupportServiceProvider`
- `php artisan vendor:publish`
- http & console kernel update `bootstrappers`
- `php artisan vendor:publish`
- `Laradic\Extensions\ExtensionsServiceProvider`
- `php artisan vendor:publish`
- edit `config/packages/laradic/extensions/config.php` set `paths[0]` to `base_path('extensions')`
- `php artisan migrate`
- `php artisan extensions:list`
- `php artisan extensions:install laradic/docit`