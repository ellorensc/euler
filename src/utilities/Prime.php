<?php

namespace utilities;

/**
 * Class Prime
 *
 * @package src
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class Prime
{
    /** @var  int */
    private $number;

    /**
     * Prime constructor.
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Resolves true if the number is prime, false otherwise.
     *
     * @return bool
     */
    public function isPrime()
    {
        $number = $this->number;

        if ($number == 1) {
            return false;
        }

        if ($number == 2) {
            return true;
        }

        if ($number % 2 == 0) {
            return false;
        }

        $ceil = ceil(sqrt($number));
        for($i = 3; $i <= $ceil; $i = $i + 2) {
            if($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * Prime number accessor.
     *
     * @return int
     */
    public function number()
    {
        return $this->number;
    }
}
