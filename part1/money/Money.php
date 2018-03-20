<?php

namespace Part1\Money;

class Money
{
    protected $amount;

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount;
    }
}
