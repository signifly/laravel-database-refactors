# Add database refactors to your Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/signifly/laravel-database-refactors.svg?style=flat-square)](https://packagist.org/packages/signifly/laravel-database-refactors)
![Tests](https://github.com/signifly/laravel-janitor/workflows/Tests/badge.svg)
[![StyleCI](https://styleci.io/repos/133973365/shield?branch=master)](https://styleci.io/repos/133973365)
[![Quality Score](https://img.shields.io/scrutinizer/g/signifly/laravel-database-refactors.svg?style=flat-square)](https://scrutinizer-ci.com/g/signifly/laravel-database-refactors)
[![Total Downloads](https://img.shields.io/packagist/dt/signifly/laravel-database-refactors.svg?style=flat-square)](https://packagist.org/packages/signifly/laravel-database-refactors)

The `signifly/laravel-database-refactors` package allows you to easily add database refactors to your Laravel app.

Below is a small example of how to use it.

Run the refactor in terminal:

```bash
php artisan db:refactor --class="UsersTableRefactor"
```

or programatically in a migration:

```php
// use Illuminate\Support\Facades\Artisan;
Artisan::call('db:refactor', [
    '--class' => 'UsersTableRefactor',
]);
```

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

## Installation

You can install the package via composer:

```bash
composer require signifly/laravel-database-refactors
```

The package will automatically register itself.

## Basic Usage

In order to generate a new refactor file, you may use the following command:

```bash
php artisan make:refactor UsersTableRefactor
```

The file will be located in the `database/refactors` folder.

## Testing

```bash
composer test
```

## Security

If you discover any security issues, please email dev@signifly.com instead of using the issue tracker.

## Credits

- [Morten Poul Jensen](https://github.com/pactode)
- [All contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
