<?php

namespace euler\problem3;

use Exception;

/**
 * Euler Project - Problem 3
 *
 * The prime factors of 13195 are 5, 7, 13 and 29. What is the largest prime factor of the number 600851475143?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class LargestPrimeFactor
{
    /** @var  int */
    private $number;

    /**
     * LargestPrimeFactor constructor.
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function calculate()
    {
        if (!$this->number) {
            throw new Exception();
        }

        $largestPrime = 1;
        $prime = 2;

        while ($this->number % $prime === 0) {
            $this->number /= $prime;
            $largestPrime = $prime;
        }
        for ($prime = 3; $prime <= $this->number; $prime += 2) {
            while ($this->number % $prime === 0) {
                $this->number /= $prime;
                $largestPrime = $prime;
            }
        }
        return $largestPrime;
    }
}
