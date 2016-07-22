<?php

Route::get('', 'RepoController@index');
Route::get('repo/{id}', 'RepoController@show');
Route::post('repo', 'RepoController@install');

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('admin', [
        'as' => 'admin',
        'uses' => 'Admin\HomeController@index'
    ]);
    Route::get('admin/repositories', [
        'as' => 'admin.repositories',
        'uses' => 'Admin\RepoController@index'
    ]);
    Route::get('admin/repositories/{id}', [
        'as' => 'admin.repositories.show',
        'uses' => 'Admin\RepoController@show'
    ]);
    Route::get('admin/credentials', [
        'as' => 'admin.credentials',
        'uses' => 'Admin\CredentialController@index'
    ]);
    Route::get('admin/credentials/{id}', [
        'as' => 'admin.credentials.show',
        'uses' => 'Admin\CredentialController@show'
    ]);
});
