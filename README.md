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