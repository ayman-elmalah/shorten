<?php

use Phplite\Router\Route;

Route::prefix('admin-panel', function () {
    // Guest admin routes
    Route::middleware('GuestAdmin', function () {
        // Login page
        Route::get('/', 'Admin\AuthController@index');
        Route::post('/', 'Admin\AuthController@submit');
    });

    // Auth admin routes
    Route::middleware('AuthAdmin', function () {
        // Dashboard page
        Route::get('/dashboard', 'Admin\DashboardController@index');

        // Admins resource
        Route::get('/admins', 'Admin\AdminsController@index');
        Route::get('/admins/create', 'Admin\AdminsController@create');
        Route::post('/admins/store', 'Admin\AdminsController@store');
        Route::get('/admins/{id}/edit', 'Admin\AdminsController@edit');
        Route::post('/admins/{id}/update', 'Admin\AdminsController@update');
        Route::post('/admins/{id}/delete', 'Admin\AdminsController@delete');

        // Users resource
        Route::get('/users', 'Admin\UsersController@index');
        Route::get('/users/create', 'Admin\UsersController@create');
        Route::post('/users/store', 'Admin\UsersController@store');
        Route::get('/users/{id}/edit', 'Admin\UsersController@edit');
        Route::post('/users/{id}/update', 'Admin\UsersController@update');
        Route::post('/users/{id}/delete', 'Admin\UsersController@delete');

        // Links resource
        Route::get('/links', 'Admin\LinksController@index');
        Route::post('/links/{id}/delete', 'Admin\LinksController@delete');

        // Logout
        Route::post('/logout', 'Admin\AuthController@logout');
    });
});