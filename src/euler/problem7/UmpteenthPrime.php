<?php

namespace euler\problem7;

/**
 * Euler Project - Problem 7
 *
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10 001st prime number?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */
class UmpteenthPrime
{
    /** @var  int */
    private $limit;

    /**
     * UmpteenthPrime constructor.
     * @param $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    /**
     * Umpteenth prime number accessor.
     *
     * @return int
     */
    public function calculate()
    {
        $last = 0;
        $count = 0;

        for ($i = 3; $count < $this->limit - 1; $i++) {
            if ($i % 2 != 1) {
                continue;
            }
            $d = 3;
            $x = sqrt($i);
            while (($i % $d != 0) && $d < $x) {
                $d += 2;
            }
            if ((($i % $d == 0 && $i != $d) * 1) == 0) {
                $last = $i;
                $count++;
            }
        }

        return $last;
    }

    /**
     * Resolves true if the number is prime, false otherwise.
     *
     * @return bool
     */
    public function isPrime($number)
    {
        if ($number == 1) {
            return false;
        }

        if ($number == 2) {
            return true;
        }

        if ($number % 2 == 0) {
            return false;
        }

        $ceil = ceil(sqrt($number));
        for($i = 3; $i <= $ceil; $i = $i + 2) {
            if($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
