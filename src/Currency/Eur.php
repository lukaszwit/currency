<?php

namespace Currency;

use Currency\JsonSerializeTrait;

class Eur extends \Currency\AbstractCurrency
{
    //use JsonSerializeTrait;
    const CURRENCY_ISO_4217 = 'EUR';

    public function test()
    {
        var_dump(get_class_methods($this));
    }

}
