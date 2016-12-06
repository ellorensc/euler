<?php

/**
 * Euler Project - Problem 10
 *
 * Summation of primes
 *
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17. Find the sum of all the primes below two million.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

// Solution: Use a Eratosthenes sieve to determine primes from 2 to 2,000,000, adding as we go.
const BASELINE = 2000000;

function getSummationPrimes()
{
    $sum = 2;
    for ($i = 2; $i < BASELINE; $i++) {
        if ($i % 2 != 1) {
            continue;
        }
        $d = 3;
        $x = sqrt($i);

        while (($i % $d != 0) && $d < $x) {
            $d += 2;
        }

        if ((($i % $d == 0 && $i != $d) * 1) == 0) {
            $sum += $i;
        }
    }
    return $sum;
}

echo getSummationPrimes();
?>