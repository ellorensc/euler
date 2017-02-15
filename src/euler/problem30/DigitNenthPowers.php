<?php

namespace euler\problem30;

/**
 * Euler Project - Problem 30
 *
 * Digit Fifth Powers
 *
 * Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:
 *
 * 1634 = 14 + 64 + 34 + 44
 * 8208 = 84 + 24 + 04 + 84
 * 9474 = 94 + 44 + 74 + 44
 *
 * As 1 = 14 is not a sum it is not included.
 *
 * The sum of these numbers is 1634 + 8208 + 9474 = 19316.
 *
 * Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class DigitNenthPowers
{
    /** @var  int */
    private $digits;
    /** @var  int */
    private $highestSum;

    /**
     * DigitNenthPowers constructor.
     * @param $digits
     * @throws \Exception
     */
    public function __construct($digits)
    {
        if (!isset($digits)) {
            throw new \Exception();
        }

        $this->digits = $digits;
    }

    /**
     * @throws \Exception
     */
    public function init()
    {
        if (!isset($this->digits)) {
            throw new \Exception();
        }

        $highestSum = 0;
        for ($i = 1; $i < $this->digits; $i++) {
            $highestSum += pow(9, $this->digits);
        }

        $this->highestSum = $highestSum;
    }

    /**
     * @return int
     */
    public function calculate()
    {
        $result = 0;

        for ($i = 2; $i < $this->highestSum; $i++) {
            $powersSum = 0;
            $currentNumber = $i;

            while ($currentNumber > 0) {
                $d = $currentNumber % 10;
                $currentNumber /= 10;

                $temp = $d;
                for ($j = 1; $j < $this->digits; $j++) {
                    $temp *= $d;
                }

                $powersSum += $temp;
            }

            if ($powersSum == $i) {
                $result += $i;
            }
        }

        return $result;
    }
}
