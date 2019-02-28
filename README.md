# Mudir
Create a control panel by laravel .. [UI used](https://github.com/komicho/sb-admin2-rtl)

### Install via composer
Add orm to composer.json configuration file.

```
$ composer require foxlaby/mudir
```

### publish 
```
$ php artisan vendor:publish
```

### Edit user model `app/User.php`
```php
use FoxLaby\Mudir\Traits\UserTrait;

class User extends Authenticatable
{
    use UserTrait;
    ...
```


go to http://127.0.0.1:8000/mudir