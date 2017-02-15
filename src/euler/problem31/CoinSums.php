<?php

namespace euler\problem31;

/**
 * Euler Project - Problem 31
 *
 * Coin sums
 *
 * In England the currency is made up of pound, £, and pence, p, and there are eight coins in general circulation:
 *
 * 1p, 2p, 5p, 10p, 20p, 50p, £1 (100p) and £2 (200p)
 *
 * It is possible to make £2 in the following way:
 *
 * 1×£1 + 1×50p + 2×20p + 1×5p + 1×2p + 3×1p
 *
 * How many different ways can £2 be made using any number of coins?
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class CoinSums
{
    /**
     * @return int
     */
    public function calculate()
    {
        $sum = 1;

        for($p100 = 0; $p100 <= 2;$p100++) {
            for($p50 = 0; $p50 <= 4; $p50++) {
                for($p20 = 0; $p20 <= 10; $p20++) {
                    for($p10 = 0; $p10 <= 20; $p10++) {
                        for($p5 = 0; $p5 <= 40; $p5++) {
                            for($p2 = 0; $p2 <= 100; $p2++) {
                                $toplam= $p100*100 + $p50*50 + $p20*20 + $p10*10 + $p5*5 + $p2*2;
                                if($toplam <= 200) {
                                    $sum++;
                                }
                            }
                        }
                    }
                }
            }
        }

        return $sum;
    }
}
