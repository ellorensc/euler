<?php
/**
 * Euler Project - Problem 9
 *
 * Special Pitagorean Triplet.
 *
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 *
 * a^2 + b^2 = c^2
 *
 * For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
 *
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000. Find the product abc.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

function getSpecialPitagoreanTriplet()
{
    $result = 0;

    for ($i=2; ; $i++) {
        for ($j=1; $j < $i; $j++) {
            $a = ($i * $i) - ($j * $j);
            $b = 2 * $i * $j;
            $c = ($i * $i) + ($j * $j);

            if ($a + $b + $c == 1000) {
                $result = $a * $b * $c;
                return $result;
            }
        }
    }
}

echo getSpecialPitagoreanTriplet();
?>