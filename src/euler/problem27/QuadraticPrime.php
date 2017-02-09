<?php

namespace euler\problem27;

use utilities\Prime;

/**
 * Euler Project - Problem 27
 *
 * Euler discovered the remarkable quadratic formula:
 *
 * n2+n+41n2+n+41
 *
 * It turns out that the formula will produce 40 primes for the consecutive integer values 0≤n≤390≤n≤39. However,
 * when n=40,402+40+41=40(40+1)+41n=40,402+40+41=40(40+1)+41 is divisible by 41, and certainly when
 * n=41,412+41+41n=41,412+41+41 is clearly divisible by 41.
 *
 * The incredible formula n2−79n+1601n2−79n+1601 was discovered, which produces 80 primes for the consecutive values
 * 0≤n≤790≤n≤79. The product of the coefficients, −79 and 1601, is −126479.
 *
 * Considering quadratics of the form:
 *
 * n2+an+bn2+an+b, where |a|<1000|a|<1000 and |b|≤1000|b|≤1000 where |n||n| is the modulus/absolute value of nn
 *
 * e.g. |11|=11|11|=11 and |−4|=4|−4|=4
 *
 * Find the product of the coefficients, aa and bb, for the quadratic expression that produces the maximum number of
 * primes for consecutive values of nn, starting with n=0n=0.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class QuadraticPrime
{
    private $limit;

    /**
     * QuadraticPrime constructor.
     * @param $limit
     * @throws \Exception
     */
    public function __construct($limit)
    {
        if (!isset($limit)) {
            throw new \Exception();
        }

        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function calculate()
    {
        $maxPrimes = 0;
        $maxProduct = 0;

        for ($a = 0; $a < $this->limit; $a++) {
            for ($b = 0; $b < $this->limit; $b++) {
                $prime = $this->count($a, $b);

                if ($maxPrimes < $prime) {
                    $maxPrimes = $prime;
                    $maxProduct = (-$a * $b);
                }
            }
        }

        return $maxProduct;
    }

    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function count($a, $b)
    {
        $count = 0;
        $n = 0;

        while (true) {
            $result = pow($n, 2) - ($a * $n) + $b;
            $prime = new Prime($result);

            if ($prime->isPrime() && $result >= 0) {
                $count++;
            } else {
                return $count;
            }

            $n++;
        }
    }
}
