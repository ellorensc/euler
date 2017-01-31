<?php

namespace euler\problem20;

use utilities\Factorial;

/**
 * Euler Project - Problem 20
 *
 * Factorial Digit Sum
 *
 * n! means n × (n − 1) × ... × 3 × 2 × 1
 *
 * For example, 10! = 10 × 9 × ... × 3 × 2 × 1 = 3628800, and the sum of the digits in the number 10! is
 * 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
 *
 * Find the sum of the digits in the number 100!
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class FactorialDigitSum
{
    /**
     * @param string $number
     * @return int
     */
    public function calculate($number)
    {
        for($i = 99; $i >= 1; $i--) {
            $number = bcmul($number, '' . $i);
        }

        $sum = 0;

        for($i = 0; $i < strlen($number); $i++) {
            $sum += $number[$i];
        }

        return $sum;
    }
}