<?php
/**
 * Euler Project - Problem 1
 *
 * Class which find the sum of all the multiples of 3 or 5 below 1000.
 * Multiples of 3 and 5. If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
 * The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

class EUPMultiples
{
    const BASELINE = 1000;

    /**
     * @var array
     */
    protected $multiples = array(3, 5);

    /**
     * Find the sum of all the multiples
     * @return int
     */
    public function findMultiples()
    {
        $result = 0;

        for ($i = 3; $i <= self::BASELINE - 1; $i++) {
            if (($i % 3 == 0) || ($i % 5 == 0)) {
                $result += $i;
            }
        }
        return $result;
    }

    /**
     * @return float
     */
    public function findMultiplesPolynomicSolution()
    {
        return 1.5 * (int) ((self::BASELINE - 1) / 3) * (int) ((self::BASELINE + 2) / 3) + 2.5 * (int) (( self::BASELINE - 1) / 5) * (int) ((self::BASELINE + 4) / 5) - 7.5 * (int) ((self::BASELINE - 1) / 15) * (int) ((self::BASELINE + 14) / 15);
    }

    /**
     * Test case
     */
    public function run()
    {
        echo 'Sum of all the multiples (looping): '.$this->findMultiples();
        echo 'Sum of all the multiples (polynomic solution): '.$this->findMultiplesPolynomicSolution();
    }
}