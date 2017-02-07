<?php

namespace utilities;

/**
 * Class EulerMath
 *
 * @package utilities
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class EulerMath
{
    /**
     * Fibonacci serie accessor.
     * @param $nenth
     * @return array
     */
    public static function fibonacci($nenth)
    {
        $numbers = [1, 1];

        for($i = 2; $i < $nenth; $i++) {
            $numbers[] = $numbers[$i - 1] + $numbers[$i - 2];
        }

        return $numbers;
    }
}
