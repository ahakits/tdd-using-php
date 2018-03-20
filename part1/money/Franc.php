<?php

namespace Part1\Money;

class Franc extends Money
{
    private $currency;

    public function __construct($amount)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
    }

    public function currency(): string
    {
        return $this->currency;
    }


    public function times($multiplier): Money
    {
        return new Franc($this->amount * $multiplier);
    }
}
