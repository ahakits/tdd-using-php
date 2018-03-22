<?php

namespace Part1\Money;

class Sum implements Expression
{
    public $augend;
    public $addend;

    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->getAmount()
            + $this->addend->reduce($bank, $to)->getAmount();

        return new Money($amount, $to);
    }
}
