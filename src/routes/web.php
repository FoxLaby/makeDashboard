<?php

Route::group(['prefix' => 'mudir', 'namespace' => 'FoxLaby\app\Http\Controllers', 'middleware' => 'web'], function () {
    Route::get('/', 'MudirController@login')->name('mudir.login');
});