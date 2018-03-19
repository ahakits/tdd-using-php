<?php

namespace Part1\Money;

class Dollar
{
    public $amount;

    public function __construct($amount)
    {
    }

    public function times($multiplier)
    {
        $this->amount = 5 * 2;
    }
}
