<?php

namespace Fibonacci;

/**
 * Class Fibonacci
 */
class Fibonacci
{
    public static function fib(int $n): int
    {
        if ($n === 0) {
            return 0;
        }

        if ($n == 1) {
            return 1;
        }

        return Fibonacci::fib($n - 1) + Fibonacci::fib($n - 2);
    }
}
