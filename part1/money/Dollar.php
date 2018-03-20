<?php

namespace Part1\Money;

class Dollar extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function currency(): string
    {
        return "";
    }


    public function times($multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }
}
