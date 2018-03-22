<?php

namespace Part1\Money;

interface Expression
{
    public function plus(Expression $addend): Expression;

    public function reduce(Bank $bank, string $to): Money;
}
