<?php

namespace euler\problem25;

use Exception;

/**
 * Euler Project - Problem 25
 *
 * 100-digit Fibonacci number
 *
 * The Fibonacci sequence is defined by the recurrence relation:
 *
 * Fn = Fn−1 + Fn−2, where F1 = 1 and F2 = 1.
 *
 * Hence the first 12 terms will be:
 *
 * F1 = 1
 * F2 = 1
 * F3 = 2
 * F4 = 3
 * F5 = 5
 * F6 = 8
 * F7 = 13
 * F8 = 21
 * F9 = 34
 * F10 = 55
 * F11 = 89
 * F12 = 144
 *
 * The 12th term, F12, is the first term to contain three digits.
 *
 * What is the index of the first term in the Fibonacci sequence to contain 1000 digits?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class NenthDigitFibonacciNumber
{
    private $digits;

    /**
     * NenthDigitFibonacciNumber constructor.
     *
     * @param $digits
     * @throws Exception
     */
    public function __construct($digits)
    {
        if (!isset($digits)) {
            throw new Exception();
        }

        $this->digits = $digits;
    }

    /**
     * Nenth digits Fibonacci sequence accessor.
     *
     * @return int
     */
    public function calculate()
    {
        $a = 1;
        $b = 1;
        $n = 2;

        while (strlen($b.'') < $this->digits) {
            $a = bcadd($a,$b);
            $b = bcadd($a,$b);

            $n += 2;
        }

        return $n;
    }
}
