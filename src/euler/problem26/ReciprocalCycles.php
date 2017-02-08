<?php

namespace euler\problem26;

/**
 * Euler Project - Problem 26
 *
 * Reciprocal cycles
 *
 * A unit fraction contains 1 in the numerator. The decimal representation of the unit
 * fractions with denominators 2 to 10 are given:
 *
 * 1/2	= 	0.5
 * 1/3	= 	0.(3)
 * 1/4	= 	0.25
 * 1/5	= 	0.2
 * 1/6	= 	0.1(6)
 * 1/7	= 	0.(142857)
 * 1/8	= 	0.125
 * 1/9	= 	0.(1)
 * 1/10	= 	0.1
 *
 * Where 0.1(6) means 0.166666..., and has a 1-digit recurring cycle. It can be seen that 1/7 has a 6-digit
 * recurring cycle.
 *
 * Find the value of d < 1000 for which 1/d contains the longest recurring cycle in its
 * decimal fraction part.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class ReciprocalCycles
{
    private $limit;

    /**
     * ReciprocalCycles constructor.
     * @param $limit
     * @throws \Exception
     */
    public function __construct($limit)
    {
        if (!isset($limit)) {
            throw new \Exception();
        }

        $this->limit = $limit;
    }

    /**
     * Value of d < 1000 for which 1/d contains the longest recurring cycle in its
     * decimal fraction part accessor.
     * @return int
     */
    public function calculate()
    {
        $scale = 990;
        $slen = 10;

        bcscale($scale+2);

        for($i = 1; $i <= $this->limit; $i++) {
            $a[$i] = substr(bcdiv(1, $i),2);
            $b1 = substr($a[$i], 4, $slen);
            $b2 = substr($a[$i], 20, $slen);
            $t1 = substr_count($a[$i], $b1);
            $t2 = substr_count($a[$i], $b2);

            if($t1 == 1 && $t2 == 1) {
                return $i;
            }
        }
    }
}
