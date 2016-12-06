<?php

namespace euler\problem1;

/**
 * Euler Project - Problem 1
 *
 * Class which find the sum of all the multiples of two numbers below a limit. For example, find the sum of
 * all multiples of 3 or 5 below 1000.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class FindTheSumOfAllMultiplesPolynomial extends FindTheSumOfAllMultiples
{
    /**
     * FindTheSumOfAllMultiplesPolynomial constructor.
     * 
     * @param $firstCandidate
     * @param $secondCandidate
     * @param $maxLimit
     */
    public function __construct($firstCandidate, $secondCandidate, $maxLimit)
    {
        parent::__construct($firstCandidate, $secondCandidate, $maxLimit);
    }

    /**
     * Returns the sum of all multiples for two candidates giving a max limit number. Polynomial method.
     *
     * @return int
     */
    public function find()
    {
        $maxLimit = $this->maxLimit();
        
        return 1.5 *    (int) (($maxLimit - 1) / 3) *
                        (int) (($maxLimit + 2) / 3) + 2.5 *
                        (int) (( $maxLimit - 1) / 5) *
                        (int) (($maxLimit + 4) / 5) - 7.5 *
                        (int) (($maxLimit - 1) / 15) *
                        (int) (($maxLimit + 14) / 15);
    }
}
