<?php

namespace Part1\Money;

class Bank
{
    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
    }
}
