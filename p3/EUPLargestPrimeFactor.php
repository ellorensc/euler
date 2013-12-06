<?php
/**
 * Euler Project - Problem 3
 *
 * The prime factors of 13195 are 5, 7, 13 and 29. What is the largest prime factor of the number 600851475143?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

class EUPLargestPrimeFactor
{
    /**
     * @param $number
     * @return int
     */
    public function largestFactor($number)
    {
        $largestPrime = 1;
        $prime = 2;

        while ($number % $prime === 0) {
            $number /= $prime;
            $largestPrime = $prime;
        }
        for ($prime = 3; $prime <= $number; $prime += 2) {
            while ($number % $prime === 0) {
                $number /= $prime;
                $largestPrime = $prime;
            }
        }
        return $largestPrime;
    }

    /**
     * Test case
     */
    public function run()
    {
        echo 'Largest prime of 600851475143: '.$this->largestFactor(600851475143);
    }
}
