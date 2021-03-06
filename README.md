# Currency

[![Latest Stable Version](http://img.shields.io/packagist/v/lukaszwit/currency.svg?style=flat-square)](https://packagist.org/packages/lukaszwit/currency)
[![Latest Version](https://img.shields.io/github/release/lukaszwit/currency.svg?style=flat-square)](https://github.com/lukaszwit/currency/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/lukaszwit/currency/master.svg?style=flat-square)](https://travis-ci.org/lukaszwit/currency)
[![Code Coverage](http://img.shields.io/scrutinizer/coverage/g/lukaszwit/currency.svg?style=flat-square)](https://scrutinizer-ci.com/g/lukaszwit/currency/)
[![Quality Score](https://img.shields.io/scrutinizer/g/lukaszwit/currency.svg?style=flat-square)](https://scrutinizer-ci.com/g/lukaszwit/currency)
[![Total Downloads](https://img.shields.io/packagist/dt/lukaszwit/currency.svg?style=flat-square)](https://packagist.org/packages/lukaszwit/currency)

Currency package introduces strictly typed and precision safe containers to work with currencies. 
Currency keeps internally amount as string (the only safe representation of floating point number in PHP).
It ensures that once any amount in given currency is defined you cannot change it's type and you can type hint your methods to use nay currency or one exact currency.
Internally this lib uses SplType extension and SplString class. Keeping amounts in string prevents from floats problems and lets you use high precision libraries like bcMath to process arithmetic operations.

See how floats work in PHP - http://php.net/manual/en/language.types.float.php

See what happen when you relies on float precision - http://stackoverflow.com/questions/3726721/php-math-precision

This package also supports well-known cryptocurrencies listed in wikipedia - http://en.wikipedia.org/wiki/Cryptocurrency#List_of_cryptocurrencies

## Install

First you need to install SPL_Types - PECL extension:
 
``` bash
$ pecl install SPL_Types
```

If SPL_Types is installed you can now install currency package via Composer:

``` bash
$ composer require lukaszwit/currency
```

## Usage

```php
<?php
use Currency\Eur;

$eur = new Eur;
$eur = '10'; // this is OK

$eur = 10; // but this emits UnexpectedValueException

```

Type hinting

```php
<?php
use Currency\Usd;
use Currency\AbstractCurrency as Currency;

class Example
{
    public function workWithCurrency(Currency $c)
    {

    }

    public function workOnlyWithUsd(Usd $usd)
    {

    }
}
```

see more examples in examples directory - https://github.com/lukaszwit/currency/tree/master/examples.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](https://github.com/lukaszwit/currency/blob/master/CONTRIBUTING.md) for details.

## Credits

- [Lukasz Witczak](https://github.com/lukaszwit)
- [All Contributors](https://github.com/lukaszwit/currency/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.



[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/lukaszwit/currency/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

