<?php

Route::group([
    'prefix' => 'mudir',
    'namespace' => 'FoxLaby\app\Http\Controllers',
    'middleware' => 'web'
], function () {
    Route::get('/login', 'MudirController@login')->name('mudir.login');
});