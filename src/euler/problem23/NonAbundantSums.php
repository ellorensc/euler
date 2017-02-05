<?php

namespace euler\problem23;

use utilities\Divisors;

/**
 * Euler Project - Problem 23
 *
 * Non-abundant sums
 *
 * A perfect number is a number for which the sum of its proper divisors is exactly equal to the number.
 * For example, the sum of the proper divisors of 28 would be 1 + 2 + 4 + 7 + 14 = 28, which means that 28 is a
 * perfect number.
 *
 * A number n is called deficient if the sum of its proper divisors is less than n and it is called abundant if
 * this sum exceeds n.
 *
 * As 12 is the smallest abundant number, 1 + 2 + 3 + 4 + 6 = 16, the smallest number that can be written as the sum
 * of two abundant numbers is 24. By mathematical analysis, it can be shown that all integers greater than 28123 can
 * be written as the sum of two abundant numbers. However, this upper limit cannot be reduced any further by analysis
 * even though it is known that the greatest number that cannot be expressed as the sum of two abundant numbers is
 * less than this limit.
 *
 * Find the sum of all the positive integers which cannot be written as the sum of two abundant numbers.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class NonAbundantSums
{
    const LIMIT = 28123;
    const LOWER_ABUNDANT = 12;

    private $abundantNumbers = [];

    /**
     * NonAbundantSums constructor.
     */
    public function __construct()
    {
        $abundantNumbers = [];
        $start = self::LIMIT - self::LOWER_ABUNDANT + 1;

        for($i = $start; $i >= self::LOWER_ABUNDANT; $i--) {
            $properDivisors = 0;
            $x = floor($i/2);

            for($j = $x; $j > 0; $j--) {
                if($i % $j === 0) {
                    $properDivisors += $j;

                    if($properDivisors > $i) {
                        $abundantNumbers[] = $i;
                        continue 2;
                    }
                }
            }
        }

        $this->abundantNumbers = $abundantNumbers;
    }

    /**
     * @return number
     */
    public function calculate()
    {
        $numbers = array_combine(range(1, self::LIMIT), range(1, self::LIMIT));

        foreach($this->abundantNumbers as $abundantNumber) {
            foreach($this->abundantNumbers as $abundantNumber2) {
                $sum = $abundantNumber + $abundantNumber2;
                unset($numbers[$sum]);
            }
        }
        return array_sum($numbers);
    }
}
