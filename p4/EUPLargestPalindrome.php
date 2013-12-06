<?php
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

class EUPLargestPalindrome
{
    /**
     * Returns the largest palindrome made from the product of two 3-digit numbers
     */
    public function getLargestPalindrome()
    {
        $results = [];

        for ($x = 999; $x>899; $x--) {
            for ($y=999; $y>899; $y--) {
                $xy = $x*$y;

                if(substr($xy, 0, (strlen($xy)/2)) == substr(strrev($xy), 0, (strlen($xy)/2)))
                    $results[] = $xy;
            }
        }
        return max($results);
    }

    /**
     * Test case
     */
    public function run()
    {
        echo 'The largest palindrome made from the product of two 3-digit numbers is: '.$this->getLargestPalindrome();
    }
}