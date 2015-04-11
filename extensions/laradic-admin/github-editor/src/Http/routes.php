<?php
Route::group(['prefix' => config('laradic_admin.base_route') . '/github-editor'], function ()
{
    Route::get('/', ['as' => 'laradic.admin.github-editor', 'uses' => 'GithubEditorController@index']);
    Route::get('/oauth2-callback', ['as' => 'laradic.admin.github-editor.oauth2-callback', 'uses' => 'GithubEditorController@signupGithub']);
});
