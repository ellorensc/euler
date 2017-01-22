<?php

namespace euler\problem14;

/**
 * Euler Project - Problem 14
 *
 * Longest Collatz sequence
 *
 * The following iterative sequence is defined for the set of positive integers:
 * n → n/2 (n is even)
 * n → 3n + 1 (n is odd)
 *
 * Using the rule above and starting with 13, we generate the following sequence:
 * 13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1
 *
 * It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been
 * proved yet (Collatz Problem), it is thought that all starting numbers finish at 1.
 *
 * Which starting number, under one million, produces the longest chain?
 *
 * What is the value of the first triangle number to have over five hundred divisors?
 *
 * NOTE: Once the chain starts the terms are allowed to go above one million.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class CollatzSequence
{
    private $startingNumber;
    private $result;

    public function __construct($number)
    {
        if (!isset($number)) {
            throw new \Exception();
        }

        if ($number == 0) {
            throw new \Exception();
        }

        ini_set("memory_limit",-1);

        $this->startingNumber = $number;
        $this->result = -1;
    }

    public function findLargestChain()
    {
        $chainLength = -1;

        while ($this->startingNumber > 0) {
            $value = $this->getChainLength($this->startingNumber);
            if ($value > $chainLength) {
                $chainLength = $value;
                $this->result = $this->startingNumber;
            }

            $this->startingNumber--;
        }
    }

    public function numberWithLargetsChain()
    {
        return $this->result;
    }

    public function getChainLength($number) {
        $chain = [
            $number
        ];

        $result = -1;

        while ($result != 1) {
            if ($this->checkNumber($number)) {
                // Is odd
                $result =  (3 * $number) + 1;
            } else {
                // Is even
                $result = $number / 2;
            }

            $chain[] = $result;
        }

        return count($chain);
    }

    public function checkNumber($number)
    {
        return $number % 2 ? true : false;
    }

    public function calculate()
    {
        $count = 0 ;
        $max = 0;

        for($n = 2 ; $n < $this->startingNumber ; $n++){
            while ($n > 1)
            {
                if ($n % 2 == 0 )
                {
                    $n = $n/2;

                }
                else
                {
                    $n = 3*$n + 1 ;

                }
                $count += 1;

                if($count > $max )
                {
                    $max = $count;
                    $final = $n;
                }
            }
        }

        return $final;
    }
}
