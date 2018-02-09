<?php

/*
=> add to RouteServiceProvider.php

// $this->mapAdminRoutes(); -> add to map function

protected function mapAdminRoutes()
{
    Route::prefix('admin')
        ->middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/admin.php'));
}
*/

Route::get('/', function () {
    return view('admin.login');
});
// group dashboard
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('admin.layouts.home');
    });
});
// group posts
Route::group(['prefix' => 'post'], function () {
//    Route::post('/', '');
});