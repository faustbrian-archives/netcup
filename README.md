# Netup PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Netcup-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Netcup-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/netcup-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Netcup-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Netcup-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Netcup-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Netcup-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/netcup-php-client
```

## Usage

```php
$netcup = new BrianFaust\Netcup\Client('username', 'password');

dd($netcup->getVServerInformation("v123456789"));
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
