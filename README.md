[![Latest Version](https://img.shields.io/github/release/thephpleague/skeleton.svg?style=flat-square)](https://github.com/lukaszwit/currency/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/thephpleague/skeleton/master.svg?style=flat-square)](https://travis-ci.org/lukaszwit/currency)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/thephpleague/skeleton.svg?style=flat-square)](https://scrutinizer-ci.com/g/lukaszwit/currency/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/thephpleague/skeleton.svg?style=flat-square)](https://scrutinizer-ci.com/g/lukaszwit/currency)
[![Total Downloads](https://img.shields.io/packagist/dt/league/skeleton.svg?style=flat-square)](https://packagist.org/packages/lukaszwit/currency)

Currency introduces strictly typed and precision safe containers to work with currencies. It ensures that once any amount in currency is defined you cannot changed it's type.
Internally this lib uses SplType extension and SplString class. Keeping amounts in string prevents from floats problems and lets you use high precision libraries like bcMath to process arithmetic operations.  

```php
<?php
use Currency\Eur;

$eur = new Eur;
$eur = '10'; // this is OK

$eur = 10; // but this emits UnexpectedValueException


```

see more examples in examples directory.