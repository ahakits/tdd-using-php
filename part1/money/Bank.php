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
        $this->rates[strval(new Pair($from, $to))] = $rate;
    }

    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }

        return $this->rates[strval(new Pair($from, $to))];
    }
}
