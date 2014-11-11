<?php
/**
 * Arithmetic operations using bcmath
 * @see http://php.net/manual/en/book.bc.php
 */

use Currency\Usd;

require './../vendor/autoload.php';
bcscale(4);

$usd1 = new Usd;
$usd1 = "1";

$usd2 = new Usd;
$usd2 = "0.0001";

$usdResult = new Usd;

$usdResult = bcadd($usd1, $usd2);
var_dump((string)$usdResult, $usdResult);

$usdResult = bcmul($usd1, "2.8");
var_dump((string)$usdResult, $usdResult);

$usdResult = bcdiv($usd1, "23");
var_dump((string)$usdResult, $usdResult);

$usdResult = bcmod($usd1, "2");
var_dump((string)$usdResult, $usdResult);

