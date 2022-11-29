# This is a class wrapper for the cedula api validation of the Dominican Republic

[![Latest Version on Packagist](https://img.shields.io/packagist/v/diamon-dove/sdk-cedula-api.svg?style=flat-square)](https://packagist.org/packages/diamon-dove/sdk-cedula-api)
[![Tests](https://github.com/diamon-dove/sdk-cedula-api/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/diamon-dove/sdk-cedula-api/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/diamon-dove/sdk-cedula-api.svg?style=flat-square)](https://packagist.org/packages/diamon-dove/sdk-cedula-api)

This is where your description should go. Try and limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require diamon-dove/sdk-cedula-api
```

## Usage

```php
$validator = Cedula\Validator::make();
echo $validator->isValid('402-12122133');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Fermin](https://github.com/masterfermin02)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
