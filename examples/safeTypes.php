<?php
/**
 * Shows how currency type accepts only strings as values
 */

use Currency\Eur;
use Currency\Usd;

require '../vendor/autoload.php';

echo PHP_EOL;

try {
    new Usd(1.1);
} catch (\UnexpectedValueException $e) {
    echo 'Float cannot be value of Usd - only strings are allowed', PHP_EOL;
}

try {
    $usd = new Usd;
    $usd = 2.1;
} catch (\UnexpectedValueException $e) {
    echo 'Float cannot be value of Usd - only strings are allowed', PHP_EOL;
}

$eur = new Eur;
$eur = '1.123456';

echo 'Value of $eur var is "' . $eur . '" but it\'s type is Class "' . get_class($eur) . '"', PHP_EOL;