<?php
namespace euler\problem16;

/**
 * Euler Project - Problem 16
 *
 * Power digit sum
 *
 * 2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
 *
 * What is the sum of the digits of the number 2^1000?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class PowerDigitSum
{
    public function calculate()
    {
        $result = 0;
        $y = bcpow(2, 1000);
        $length = strlen($y);

        for($i=0; $i<$length; $i++) {
            $result += substr($y, $i, 1);
        }

        return $result;
    }
}
