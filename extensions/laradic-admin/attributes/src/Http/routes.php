<?php
Route::get('attributes/view', ['as' => 'laradic.admin.attributes.view', 'uses' => 'AttributesController@view']);
Route::get('attributes/field-type', ['as' => 'laradic.admin.attributes.field-type', 'uses' => 'AttributesController@fieldType']);
$pre = 'laradic.admin.attributes.';
Route::resource('attributes', 'AttributesController', [
    'except' => ['create', 'edit'],
    'names'  => [
        'index'   => "${pre}index",
        'show'    => "${pre}show",
        'store'   => "${pre}store",
        'update'  => "${pre}update",
        'destroy' => "${pre}destroy",
    ]
]);
