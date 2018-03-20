<?php

namespace Part1\Money;

abstract class Money
{
    protected $amount;
    protected $currency;

    abstract public function times($multiplier): Money;

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(Money $other): bool
    {
        return $this->amount === $other->amount
            && get_class($this) === get_class($other);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }
}
