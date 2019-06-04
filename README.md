# Netup PHP Client

[![Build Status](https://img.shields.io/travis/plients/Netcup-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Netcup-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/netcup.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Netcup-PHP-Client.svg?style=flat-square)](https://github.com/plients/Netcup-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Netcup-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Netcup-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/netcup
```

## Usage

```php
$netcup = new Plients\Netcup\Client('username', 'password');

dd($netcup->getVServerInformation("v123456789"));
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
