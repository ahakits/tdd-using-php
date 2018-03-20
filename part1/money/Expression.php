<?php

namespace Part1\Money;

interface Expression
{
    public function reduce(string $to): Money;
}
