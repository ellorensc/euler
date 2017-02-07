<?php

namespace euler\problem25;

use Exception;

class NenthDigitFibonacciNumber
{
    private $digits;

    /**
     * NenthDigitFibonacciNumber constructor.
     *
     * @param $digits
     * @throws Exception
     */
    public function __construct($digits)
    {
        if (!isset($digits)) {
            throw new Exception();
        }

        $this->digits = $digits;
    }

    /**
     * Nenth digits Fibonacci sequence accessor.
     *
     * @return int
     */
    public function calculate()
    {
        $a = 1;
        $b = 1;
        $n = 2;

        while (strlen($b.'') < $this->digits) {
            $a = bcadd($a,$b);
            $b = bcadd($a,$b);

            $n += 2;
        }

        return $n;
    }
}
