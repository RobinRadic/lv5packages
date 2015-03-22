Laravel package development workspace
=====================================

## Overview
- PHPStorm project files and run configurations (debugger, phpunit etc)  
- Unit testing for all sub-projects  
- Laravel Blade admin theme using [packadic/theme](https://github.com/packadic/theme) as upstream

## Requirements
- Apache ant
- php > 5.4, git, phpunit, phpmd, phpcs, phploc, phpdoc, etc
   
  
## Init
```bash
git clone https://github.com/robinradic/lv5packages
cd lv5packages
composer install
mkdir radic && cd radic
git clone https://github.com/robinradic/laravel-themes themes
git clone https://github.com/robinradic/support
git clone https://github.com/robinradic/docs
git clone https://github.com/robinradic/blade-extensions
```

