<?php

namespace Part1\Money;

class Dollar extends Money
{
    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }
}
