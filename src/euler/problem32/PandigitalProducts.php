<?php

namespace euler\problem32;

/**
 * Euler Project - Problem 32
 *
 * Pandigital products
 *
 * We shall say that an n-digit number is pandigital if it makes use of all the digits 1 to n exactly once; for example,
 * the 5-digit number, 15234, is 1 through 5 pandigital.
 *
 * The product 7254 is unusual, as the identity, 39 × 186 = 7254, containing multiplicand, multiplier, and product
 * is 1 through 9 pandigital.
 *
 * Find the sum of all products whose multiplicand/multiplier/product identity can be written as a 1
 * through 9 pandigital.
 *
 * HINT: Some products can be obtained in more than one way so be sure to only include it once in your sum.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class PandigitalProducts
{
    /**
     * @param $number
     * @return bool
     */
    public function isPandigital($number)
    {
        $length = strlen($number);

        if ($length != 9) {
            return false;
        }

        for ($i = 1; $i <= $length; $i++) {
            if (strpos($number, (string)$i) === false) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param $multiplicand
     * @param $multiplier
     * @param $sums
     */
    public function pandigitalProduct($multiplicand, $multiplier, &$sums) {
        $product = $multiplicand * $multiplier;
        $number =  $multiplicand . $multiplier . $product;

        if ($this->isPandigital($number)) {
            $sums[$product] = $product;
        }
    }

    /**
     * @return number
     */
    public function calculate()
    {
        $sums = [];

        for ($i = 1; $i < 9; $i++) {
            for ($j = 1234; $j < 9876; $j++) {
                $this->pandigitalProduct($i, $j, $sums);
            }
        }

        for ($i = 12; $i < 98; $i++) {
            for ($j = 123; $j < 987; $j++) {
                $this->pandigitalProduct($i, $j, $sums);
            }
        }

        return array_sum($sums);
    }
}
