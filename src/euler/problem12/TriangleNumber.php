<?php

namespace euler\problem12;

use utilities\Divisors;

/**
 * Euler Project - Problem 12
 *
 * Highly divisible triangle number
 *
 * The sequence of triangle numbers is generated by adding the natural numbers.
 * So the 7th triangle number would be 1 + 2 + 3 + 4 + 5 + 6 + 7 = 28.
 *
 * The first ten terms would be: 1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...
 *
 * Let us list the factors of the first seven triangle numbers:
 *
 * 1:  1
 * 3:  1,3
 * 6:  1,2,3,6
 * 10: 1,2,5,10
 * 15: 1,3,5,15
 * 21: 1,3,7,21
 * 28: 1,2,4,7,14,28
 *
 * We can see that 28 is the first triangle number to have over five divisors.
 *
 * What is the value of the first triangle number to have over five hundred divisors?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class TriangleNumber
{
    /** @var  int */
    private $divisors;

    /**
     * TriangleNumber constructor.
     * @param $divisors
     * @throws \Exception
     */
    public function __construct($divisors)
    {
        if (!isset($divisors)) {
            throw new \Exception();
        }

        $this->divisors = $divisors;
    }

    /**
     *
     * @return int
     */
    public function findByMinimumNumberOfDivisors()
    {
        $triangle = 0;
        $i = 1;
        $continueSearch = true;

        while ($continueSearch) {
            $triangle += $i;

            $triangleDivisors = new Divisors($triangle);
            if ($triangleDivisors->countDivisors() >= $this->divisors) {
                $continueSearch = false;
            }
            $i++;
        }

        return $triangle;
    }
}

