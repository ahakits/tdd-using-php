<?php

namespace Part1\Money;

class Franc extends Money
{
    public function __construct($amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }
}
