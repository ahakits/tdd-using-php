<?php

namespace Part1\Money;

class Franc extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function currency(): string
    {
        return "CHF";
    }


    public function times($multiplier): Money
    {
        return new Franc($this->amount * $multiplier);
    }
}
