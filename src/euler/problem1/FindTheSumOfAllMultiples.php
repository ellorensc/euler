<?php

namespace euler\problem1;

use Exception;
use utilities\Prime;

/**
 * Euler Project - Problem 1
 *
 * Class which find the sum of all the multiples of two numbers below a limit. For example, find the sum of
 * all multiples of 3 or 5 below 1000.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class FindTheSumOfAllMultiples
{
    /** @var  int */
    private $firstCandidate;
    /** @var  int */
    private $secondCandidate;
    /** @var  int */
    private $maxLimit;

    /**
     * FindTheSumOfAllMultiples constructor.
     *
     * @param $firstCandidate
     * @param $secondCandidate
     * @param $maxLimit
     */
    public function __construct($firstCandidate, $secondCandidate, $maxLimit)
    {
        $this->firstCandidate = $firstCandidate;
        $this->secondCandidate = $secondCandidate;
        $this->maxLimit = $maxLimit;
    }

    /**
     * Returns the sum of all multiples for two candidates giving a max limit number.
     *
     * @return int
     * @throws Exception
     */
    public function find()
    {
        if (!$this->candidatesArePrimeNumbers()) {
            throw new Exception();
        }

        if (!$this->maxLimit()) {
            throw new Exception();
        }

        $result = 0;

        for ($i = 3; $i <= $this->maxLimit() - 1; $i++) {
            if (($i % $this->firstCandidate() == 0) || ($i % $this->secondCandidate() == 0)) {
                $result += $i;
            }
        }

        return $result;
    }

    /**
     * First candidate accessor.
     *
     * @return int
     */
    public function firstCandidate(): int
    {
        return $this->firstCandidate;
    }

    /**
     * @param int $firstCandidate
     */
    public function setFirstCandidate($firstCandidate)
    {
        $this->firstCandidate = $firstCandidate;
    }

    /**
     * Second candidate accessor.
     *
     * @return int
     */
    public function secondCandidate(): int
    {
        return $this->secondCandidate;
    }

    /**
     * @param int $secondCandidate
     */
    public function setSecondCandidate($secondCandidate)
    {
        $this->secondCandidate = $secondCandidate;
    }

    /**
     * Max limit accessor.
     *
     * @return int
     */
    public function maxLimit(): int
    {
        return $this->maxLimit;
    }

    /**
     * @param int $maxLimit
     */
    public function setMaxLimit($maxLimit)
    {
        $this->maxLimit = $maxLimit;
    }

    /**
     * @return bool
     */
    public function candidatesArePrimeNumbers()
    {
        $firstCandidate = new Prime($this->firstCandidate);
        $secondCandidate = new Prime($this->secondCandidate);

        return ($firstCandidate->isPrime() && $secondCandidate->isPrime());
    }
}
