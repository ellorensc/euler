<?php

namespace euler\problem21;

/**
 * Euler Project - Problem 21
 *
 * Amicable Numbers
 *
 * Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
 * If d(a) = b and d(b) = a, where a ≠ b, then a and b are an amicable pair and each of a and b
 * are called amicable numbers.
 *
 * For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284.
 * The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.
 *
 * Evaluate the sum of all the amicable numbers under 10000.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class AmicableNumbers
{
    public function divisorSum($a)
    {
        $sum = 0;

        for ($i = 1; $i <= $a / 2; ++$i) {
            if ($a % $i == 0) {
                $sum += $i;
            }
        }

        return $sum;
    }

    public function calculate()
    {
        $sum = 0;

        for ($i = 1; $i < 10000; ++$i) {
            $a = $this->divisorSum($i);
            if ($a == $i) {
                continue;
            }

            if ($i == $this->divisorSum($a)) {
                $sum += $i;
            }
        }

        return $sum;
    }
}
