<?php

namespace euler\problem24;

/**
 * Euler Project - Problem 24
 *
 * Lexicographic permutations
 *
 * A permutation is an ordered arrangement of objects. For example, 3124 is one possible
 * permutation of the digits 1, 2, 3 and 4. If all of the permutations are listed numerically or alphabetically, we
 * call it lexicographic order. The lexicographic permutations of 0, 1 and 2 are:
 *
 * 012   021   102   120   201   210
 *
 * What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class LexicographicPermutation
{
    public function calculate($elements, $number)
    {
        $permutations = "";
        $elementsSize = count($elements);
        $counter = $this->factorial($elementsSize - 1);

        for ($i = 0; $i < $elementsSize; $i++) {
            if ($counter >= $number) {
                $segment = array_slice($elements, $i, 1);
                $permutations = $segment[0] . $this->calculate($elements, $number);
                break;
            }
            $number -= $counter;
        }

        return $permutations;
    }

    public function factorial($value)
    {
        $result = 1;

        for ($i = 2; $i < $value; $i++) {
            $result = $result * $i;
        }

        return $result;
    }
}
