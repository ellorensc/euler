<?php

namespace euler\problem4;

/**
 * Euler Project - Problem 4
 *
 * A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit
 * numbers is 9009 = 91 * 99. Find the largest palindrome made from the product of two 3-digit numbers.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */
class Palindrome
{
    /**
     * Palindrome constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function largestPalindrome()
    {
        $results = [];

        for ($x = 999; $x>899; $x--) {
            for ($y=999; $y>899; $y--) {
                $xy = $x * $y;

                if(substr($xy, 0, (strlen($xy)/2)) == substr(strrev($xy), 0, (strlen($xy)/2))) {
                    $results[] = $xy;
                }
            }
        }

        return max($results);
    }
}
