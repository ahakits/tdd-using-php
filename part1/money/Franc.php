<?php

namespace Part1\Money;

class Franc extends Money
{
    public function __construct($amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times($multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }
}
