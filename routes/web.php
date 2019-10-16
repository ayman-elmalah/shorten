<?php

use Phplite\Router\Route;

// Home page
Route::get('/', 'Web\HomeController@index');

// Save link
Route::post('links/store', 'Web\LinksController@store');

// Link page
Route::get('link/{link}', 'Web\LinksController@link');

// Guest user routes
Route::middleware('GuestUser', function () {
    // Login routes
    Route::get('/login', 'Web\AuthController@showLoginForm');
    Route::post('/login', 'Web\AuthController@login');

    // Register routes
    Route::get('/register', 'Web\AuthController@showRegisterForm');
    Route::post('/register', 'Web\AuthController@register');
});

// Auth user routes
Route::middleware('AuthUser', function () {
    // My links
    Route::get('/my-links', 'Web\LinksController@myLinks');

    // Delete link
    Route::post('link/{id}/delete', 'Web\LinksController@delete');

    // Logout user
    Route::post('logout', 'Web\AuthController@logout');
});