<?php
/**
 * Euler Project - Problem 7
 *
 * By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
 * What is the 10 001st prime number?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

function getUmpteenthPrime()
{
    $last = 0;
    $count = 0;
    $max = 10001;

    for ($i = 3; $count < $max - 1; $i++) {
        if ($i % 2 != 1) {
            continue;
        }
        $d = 3;
        $x = sqrt($i);
        while (($i % $d != 0) && $d < $x) {
            $d += 2;
        }
        if ((($i % $d == 0 && $i != $d) * 1) == 0) {
            $last = $i;
            $count++;
        }
    }
    return $last;
}

echo 'The 10,001st prime number is: '.getUmpteenthPrime();
?>