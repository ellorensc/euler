<?php

namespace euler\problem8;

/**
 * Euler Project - Problem 8
 *
 * Largest product in a series. Find the greatest product of five consecutive digits in the 1000-digit number.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class Product
{
    /** @var  string */
    private $number;

    /**
     * Product constructor.
     * @param $number
     * @throws \Exception
     */
    public function __construct($number)
    {
        if ($number < 2) {
            throw new \Exception();
        }

        $this->number = $number;
    }

    /**
     * Largest product in a series. This function find the greatest product of N-consecutive digits in the M-digit number.
     * @param $consecutiveDigits
     * @return int
     */
    public function gretest($consecutiveDigits)
    {
        $result = 0;

        for ($i=0; $i < strlen($this->number); $i++) {
            $data5digits = substr($this->number, $i, $consecutiveDigits);
            if (strlen($data5digits) == $consecutiveDigits) {
                $_product = 1;
                for ($j = 0; $j < $consecutiveDigits; $j++) {
                    $_product *= $data5digits[$j];
                }

                if ($_product > $result) {
                    $result = $_product;
                }
            }
        }

        return $result;
    }
}
