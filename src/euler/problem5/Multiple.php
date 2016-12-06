<?php

namespace euler\problem5;

use Exception;

/**
 * Euler Project - Problem 5
 *
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class Multiple
{
    /** @var  int */
    private $limit;

    /**
     * Multiple constructor.
     * @param $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    /**
     * Find the smallest positive number that is evenly divisible by all of the numbers from 1 to some limit
     *
     * @return int
     * @throws Exception
     */
    public function smallest()
    {
        if (!isset($this->limit)) {
            throw new Exception();
        }

        if ($this->limit < 2) {
            throw new Exception();
        }

        $inc = 1;
        $num = 1;

        for ($i = 1; $i <= $this->limit; $i++) {
            while ($num % $i != 0) {
                $num += $inc;
            }
            $inc = $num;
        }

        return $inc;
    }
}
