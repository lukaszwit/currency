<?php

namespace Currency;

class AbstractCurrency extends \SplString implements \JsonSerializable
{
    public function __construct($value = null)
    {
        if (null !== $value) {
            parent::__construct($value, true);
        }
    }

    public function jsonSerialize()
    {
        $jsonVars = ['value' => /*self::__default*/ (string) $this];
        $currency = constant('static::CURRENCY_ISO_4217');
        if (null !== $currency) {
            $jsonVars['ISO_4217'] = $currency;
        }

        return $jsonVars;
    }
} 