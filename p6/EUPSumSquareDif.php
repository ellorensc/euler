<?php
/**
 * Euler Project - Problem 6
 *
 * The sum of the squares of the first ten natural numbers is: 1^2 + 2^2 + … + 10^2 = 385.
 * The square of the sum of the first ten natural numbers is: (1 + 2 + … + 10)^2 = 55^2 = 3025
 *
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of
 * the sum is 3025 – 385 = 2640.
 *
 * Find the difference between the sum of the squares of the first one hundred natural numbers and
 * the square of the sum.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 * @copyright Copyright (c) 2013 Eduardo Llorens
 */

/**
 * Returns the difference between the sum of the squares of the first one hundred natural numbers and
 * the square of the sum
 * @return number
 */
function getSumSquareDifference()
{
    $sum = 0;
    $sum2 = 0;
    for ($i = 1; $i <= 100; $i++) {
        $pow = pow($i, 2);
        $sum += $pow;
        $sum2 += $i;

    }
    $sum2 = pow($sum2, 2);
    return $sum2 - $sum;
}

echo 'Difference between the sum of the squares of the first one hundred natural numbers and the square of the sum: '.getSumSquareDifference();