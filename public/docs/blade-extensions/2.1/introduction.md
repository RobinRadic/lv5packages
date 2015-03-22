Laravel Blade Extensions
========================

[![Build Status](https://travis-ci.org/RobinRadic/blade-extensions.svg?branch=master)](https://travis-ci.org/RobinRadic/blade-extensions)
[![GitHub version](https://badge.fury.io/gh/robinradic%2Fblade-extensions.svg)](http://badge.fury.io/gh/robinradic%2Fblade-extensions)
[![Total Downloads](https://poser.pugx.org/radic/blade-extensions/downloads.svg)](https://packagist.org/packages/radic/blade-extensions)
[![Goto documentation](http://img.shields.io/badge/goto-documentation-orange.svg)](http://robinradic.github.io/blade-extensions)
[![Goto repository](http://img.shields.io/badge/goto-repository-orange.svg)](https://github.com/robinradic/blade-extensions)
[![License](http://img.shields.io/badge/license-MIT-blue.svg)](http://radic.mit-license.org)

Version 2.0
-----------

**Laravel 5** package providing additional Blade functionality.

- **@set @unset** Setting and unsetting of values
- **@foreach @break @continue** Loop data and extras
- **@partial @block @render** Creating view partials and blocks. Nest them, extend them, render them.
- **@macro** Defining and running macros
- **@debug** Debugging values in views
- **BladeViewTestingTrait** enables all assert methods from your test class in your view as directives. `@assertTrue($hasIt)..`

#### Some examples
```php
@foreach($stuff as $key => $val)
    $loop->index;       // int, zero based
    $loop->index1;      // int, starts at 1
    $loop->revindex;    // int
    $loop->revindex1;   // int
    $loop->first;       // bool
    $loop->last;        // bool
    $loop->even;        // bool
    $loop->odd;         // bool
    $loop->length;      // int

    @foreach($other as $name => $age)
        $loop->parent->odd;
        @foreach($friends as $foo => $bar)
            $loop->parent->index;
            $loop->parent->parentLoop->index;
        @endforeach
    @endforeach
    
    
    @section('content')
        @partial('partials.danger-panel')
            @block('title', 'This is the panel title')
    
            @block('body')
                This is the panel body.
            @endblock
        @endpartial
    @stop
    
    @partial('partials.panel')
        @block('type', 'danger')
    
        @block('title')
            Danger! @render('title')
        @endblock
    @endpartial
    
    @break

    @continue
@endforeach

@set('newvar', 'value')
{{ $newvar }}


@debug($somearr)
```


### Copyright/License
Copyright 2015 [Robin Radic](https://github.com/RobinRadic) - [MIT Licensed](http://radic.mit-license.org)
