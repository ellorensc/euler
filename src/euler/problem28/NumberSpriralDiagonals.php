<?php

namespace euler\problem28;

/**
 * Euler Project - Problem 28
 *
 * Starting with the number 1 and moving to the right in a clockwise direction a 5 by 5 spiral is formed as follows:
 *
 * 21 22 23 24 25
 * 20  7  8  9 10
 * 19  6  1  2 11
 * 18  5  4  3 12
 * 17 16 15 14 13
 *
 * It can be verified that the sum of the numbers on the diagonals is 101.
 *
 * What is the sum of the numbers on the diagonals in a 1001 by 1001 spiral formed in the same way?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class NumberSpriralDiagonals
{
    public function calculate()
    {
        $result = 1;

        for($i=2, $b=2, $x=3; $i<=501; $i++, $b+=2) {
            $result = (4 * $x) + (6 * $b) + $result;
            $x = $x + (4 * $b) + 2;
        }

        return $result;
    }
}
