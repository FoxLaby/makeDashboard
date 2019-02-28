<?php

Route::group([
    'prefix' => 'mudir',
    'namespace' => 'FoxLaby\Mudir\app\Http\Controllers',
    'middleware' => 'web'
], function () {
    Route::get('/login', 'MudirController@login')->name('mudir.login');
});