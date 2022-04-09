[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner-direct-single.svg)](https://stand-with-ukraine.pp.ua)

[![Made in Ukraine](https://img.shields.io/badge/made_in-ukraine-ffd700.svg?labelColor=0057b7)](https://stand-with-ukraine.pp.ua)
[![Issues](https://img.shields.io/github/issues/bmykyta/sum?labelColor=%23fc0000&color=000000)](https://github.com/bmykyta/sum/issues)
![Packagist License](https://img.shields.io/packagist/l/bmykyta/sum)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/bmykyta/sum)
![GitHub Repo stars](https://img.shields.io/github/stars/bmykyta/sum?style=social)

# Sum

A simple package to add two numbers with same/different data types.

## How to install

To get the latest version of `Sum`, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require bmykyta/sum
```

Or manually update `require` block of `composer.json` and run `composer update`.

```json
{
  "require": {
    "bmykyta/sum": "^1.0"
  }
}
```

## How to use

```php
use bmykyta\Sum\Sum;

$sum = new Sum;
echo $sum->calculate(617, 617); // 1234
```

## Execute tests

You can run tests with command

```bash
vendor/bin/phpunit tests/
```