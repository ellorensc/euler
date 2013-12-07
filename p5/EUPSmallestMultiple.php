<?php
/**
 * Euler Project - Problem 5
 *
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

class EUPSmallestMultiple
{
    /**
     * Return the smallest multiple
     * @return int
     */
    public function getSmallestMultiple()
    {
        $inc = 1;
        $num = 1;

        for ($i = 1; $i <= 20; $i++) {
            while ($num % $i != 0) {
                $num += $inc;
            }
            $inc = $num;
        }
        return $inc;
    }

    /**
     * Test case
     */
    public function run()
    {
        echo 'Smallest positive number that is evenly divisible by all of the numbers from 1 to 20: '.$this->getSmallestMultiple();
    }
}