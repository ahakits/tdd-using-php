<?php

namespace Part1\Money;

class Pair
{
    private $from;
    private $to;

    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Pair $other): bool
    {
        return $this->from === $other->from
            && $this->to === $other->to;
    }

    public function __toString()
    {
        return $this->from . $this->to;
    }
}
