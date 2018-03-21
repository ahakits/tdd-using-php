<?php

namespace Part1\Money;

class Bank
{
    private $rates = [];

    public function reduce(Expression $source, string $to)
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $this->rates[(new Pair($from, $to))->hashCode()] = $rate;
    }

    public function rate(string $from, string $to): int
    {
        return $this->rates[(new Pair($from, $to))->hashCode()];
    }
}
