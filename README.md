#makeDashboard
Create a control panel by laravel .. [UI used](https://github.com/komicho/sb-admin2-rtl)

###Install via composer
Add orm to composer.json configuration file.

```
$ composer require foxlaby/makedashboard
```

###add to file config/app.php
```php
'providers' => [
    ...
    FoxLaby\Support\ServiceProvider::class,
],
```

###publish 
```
$ php artisan vendor:publish
```
OR
```
$ php artisan vendor:publish --provider="FoxLaby\Support\ServiceProviderr"
```

###Edit file  RouteServiceProvider.php
```php
 public function map()
 {
	 $this->mapApiRoutes();

	$this->mapWebRoutes();

	$this->mapAdminRoutes();
}
```
add function 
```php
protected function mapAdminRoutes()
{
	Route::prefix('admin')
	->middleware('web')
	->namespace($this->namespace)
	->group(base_path('routes/admin.php'));
}
```

go to http://127.0.0.1:8000/admin