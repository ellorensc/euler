<?php
/**
 * Class which find the sum of all the multiples of 3 or 5 below 1000.
 * Multiples of 3 and 5. If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9.
 * The sum of these multiples is 23. Find the sum of all the multiples of 3 or 5 below 1000
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

class EULMultiples
{
    const BASELINE = 1000;

    /**
     * @var array
     */
    protected $multiples = array(3, 5);

    /**
     * Find the sum of all the multiples
     * @param $multiples
     * @return int
     */
    public function findMultiples()
    {
        $n = 0;
        $total = 0;

        while ($n < self::BASELINE) {
            if ($n % 3 == 0 || $n % 5 == 0) {
                $total += $n;
                $n++;
            } else {
                $n++;
            }
        }
        return $n;
    }
}