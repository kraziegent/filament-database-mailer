# Send bulk emails to recipients using database email templates

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kraziegent/filament-database-mailer.svg?style=flat-square)](https://packagist.org/packages/kraziegent/filament-database-mailer)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kraziegent/filament-database-mailer/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kraziegent/filament-database-mailer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kraziegent/filament-database-mailer/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kraziegent/filament-database-mailer/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kraziegent/filament-database-mailer.svg?style=flat-square)](https://packagist.org/packages/kraziegent/filament-database-mailer)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require kraziegent/filament-database-mailer
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-database-mailer-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-database-mailer-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-database-mailer-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$databaseMailer = new Kraziegent\DatabaseMailer();
echo $databaseMailer->echoPhrase('Hello, Kraziegent!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Peter Olumolu](https://github.com/kraziegent)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
