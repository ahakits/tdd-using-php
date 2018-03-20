<?php

namespace Part1\Money;

class Dollar extends Money
{
    public function __construct($amount, string $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times($multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
