<?php

namespace euler\problem10;

use Exception;
use utilities\Globals;

/**
 * Euler Project - Problem 10
 *
 * Summation of primes
 *
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17. Find the sum of all the primes below two million.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class SummationPrimes
{
    /** @var  int */
    private $limit;
    /** @var  int */
    private $method;
    /** @var array  */
    private $availableMethods = [
        Globals::ERATOSTHENES,
    ];

    /**
     * SummationPrimes constructor.
     * @param $limit
     * @param $method
     */
    public function __construct($limit, $method)
    {
        $this->limit = $limit;
        $this->method = $method;
    }

    public function calculate()
    {
        if (!isset($this->limit)) {
            throw new Exception();
        }

        if (!in_array($this->method(), $this->availableMethods)) {
            throw new Exception();
        }

        $result = 0;

        switch($this->method()) {
            case Globals::ERATOSTHENES:
                $result = $this->eratosthenesCalc();
                break;
        }

        return $result;
    }

    /**
     * Find the sum of all the primes below limit.
     * @return int
     */
    private function eratosthenesCalc()
    {
        $sum = 2;

        for ($i = 2; $i < $this->limit(); $i++) {
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

    /**
     * @param int $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Method accessor.
     * @return int
     */
    public function method()
    {
        return $this->method;
    }

    /**
     * @param $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * Limit accessor.
     * @return int
     */
    public function limit()
    {
        return $this->limit;
    }
}