<?php

namespace Part1\Money;

class Dollar
{
    public $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function times($multiplier)
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals($other): bool
    {
        return $this->amount === $other->amount;
    }
}
