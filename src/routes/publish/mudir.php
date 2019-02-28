<?php

Route::get('/', function(){
    return view('mudir.home');
})->name('mudir.home');