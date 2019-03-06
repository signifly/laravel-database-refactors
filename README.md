# Add database refactors to your Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/signifly/laravel-database-refactors.svg?style=flat-square)](https://packagist.org/packages/signifly/laravel-database-refactors)
[![Build Status](https://img.shields.io/travis/signifly/laravel-database-refactors/master.svg?style=flat-square)](https://travis-ci.org/signifly/laravel-database-refactors)
[![StyleCI](https://styleci.io/repos/133973365/shield?branch=master)](https://styleci.io/repos/133973365)
[![Quality Score](https://img.shields.io/scrutinizer/g/signifly/laravel-database-refactors.svg?style=flat-square)](https://scrutinizer-ci.com/g/signifly/laravel-database-refactors)
[![Total Downloads](https://img.shields.io/packagist/dt/signifly/laravel-database-refactors.svg?style=flat-square)](https://packagist.org/packages/signifly/laravel-database-refactors)

The `signifly/laravel-database-refactors` package allows you to easily add database refactors to your Laravel app.

Below is a small example of how to use it.

Run the refactor in terminal:

```bash
$ php artisan db:refactor --class="UsersTableSeeder"
```

or programatically in a migration:

```php
// use Illuminate\Support\Facades\Artisan;
Artisan::call('db:refactor', [
    '--class' => 'UsersTableRefactor',
]);
```

## Documentation
Until further documentation is provided, please have a look at the tests.

## Installation

You can install the package via composer:

```bash
$ composer require signifly/laravel-database-refactors
```

The package will automatically register itself.

**IMPORTANT!** 
Update your `composer.json` file in order to autoload the database refactors:

```
    "autoload": {
        "classmap": [
            "database/seeds",
            "database/factories",
            "database/refactors"
        ],
        "psr-4": {
            "App\\": "app/"
        }
    },
```

## Testing

```bash
$ composer test
```

TO DO

## Security

If you discover any security issues, please email dev@signifly.com instead of using the issue tracker.

## Credits

- [Morten Poul Jensen](https://github.com/pactode)
- [All contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
