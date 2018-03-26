<?php

namespace Tests\Fibonacci;

use Fibonacci\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testFibonacci()
    {
        $cases = [[0, 0], [1, 1], [2, 1], [3, 2]];
        for ($i = 0; $i < count($cases); $i++) {
            $this->assertEquals($cases[$i][1], Fibonacci::fib($cases[$i][0]));
        }
    }
}
