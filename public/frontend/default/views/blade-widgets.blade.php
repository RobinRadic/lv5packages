@extends('theme::layout')

@section('content')
    content
    <?php
    $widgets = app('blade.widgets');
    $widget = $widgets->create('test');

    $widgets->startWidget('test');
    ?>

    @ widget('asdf')

    @ stopwidget

    <?php
    $widgets->stopWidget();
    ?>

    <?php echo $widgets->render('test'); ?>
@stop
