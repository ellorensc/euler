<?php
namespace euler\problem33;

/**
 * Euler Project - Problem 33
 *
 * Digit cancelling fractions
 *
 * The fraction 49/98 is a curious fraction, as an inexperienced mathematician in attempting to simplify it may
 * incorrectly believe that 49/98 = 4/8, which is correct, is obtained by cancelling the 9s.
 *
 * We shall consider fractions like, 30/50 = 3/5, to be trivial examples.
 *
 * There are exactly four non-trivial examples of this type of fraction, less than one in value, and containing two
 * digits in the numerator and denominator.
 *
 * If the product of these four fractions is given in its lowest common terms, find the value of the denominator.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class DigitCancellingFraction
{
    public function calculate()
    {
        $denProduct = 1;
        $nomProduct = 1;

        for ($i = 1; $i < 10; $i++) {
            for ($den = 1; $den < $i; $den++) {
                for ($nom = 1; $nom < $den; $nom++) {
                    if (($nom * 10 + $i) * $den == $nom * ($i * 10 + $den)) {
                        $denProduct *= $den;
                        $nomProduct *= $nom;
                    }
                }
            }
        }

        $denProduct /= $this->gcd($nomProduct, $denProduct);

        return $denProduct;
    }

    private function gcd($a, $b)
    {
        $y = 0;
        $x = 0;

        if ($a > $b) {
            $x = $a;
            $y = $b;
        } else {
            $x = $b;
            $y = $a;
        }

        while ($x % $y != 0) {
            $temp = $x;
            $x = $y;
            $y = $temp % $x;
        }

        return $y;
    }
}
