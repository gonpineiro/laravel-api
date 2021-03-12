### Laravel Sanctum

Instalar con:

```console
    composer require laravel/sanctum
```

Correr las Migraciones:

```console
    php artisan migrate
```

Agregar el middleware en las rutas API

```php
    ->middleware('auth:sanctum');
```

El cliente debera tener configurado el header siguente:

```php
    "Accept: application/json"
```