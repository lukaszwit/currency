<?php
/**
 * Created by PhpStorm.
 * User: lukaszwitczak
 * Date: 10/15/14
 * Time: 9:18 PM
 */

namespace Currency;


use Currency\JsonSerializeTrait;

class Usd extends \Currency\AbstractCurrency
{
    //use JsonSerializeTrait;
    const CURRENCY_ISO_4217 = 'USD';
} 