<?php

namespace utilities;

/**
 * Class Divisors
 *
 * @package utilities
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class Divisors
{
    /** @var array  */
    public $factor = [];

    /**
     * Divisors constructor.
     * @param $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    /**
     * Divisors of a number accessor.
     * @return array
     */
    public function divisors()
    {
        $divisors = [];

        for($i = 1; $i < $this->num; $i++) {
            if (($this->num % $i) == 0) {
                $divisors[] = $i;
            }
        }

        return $divisors;
    }

    /**
     * A number n is called abundant if the sum of its proper divisors is great than n
     * @return bool
     */
    public function isAbundant()
    {
        $result = 0;
        $divisors = $this->divisors();

        foreach ($divisors as $divisor) {
            $result += $divisor;
        }

        return $result > $this->num;
    }

    /**
     * A number n is called perfect if the sum of its proper divisors is equals to n
     * @return bool
     */
    public function isPerfect()
    {
        $result = 0;
        $divisors = $this->divisors();

        foreach ($divisors as $divisor) {
            $result += $divisor;
        }

        return $result == $this->num;
    }

    /**
     * A number n is called deficient if the sum of its proper divisors is less than n
     * @return bool
     */
    public function isDeficient()
    {
        $result = 0;
        $divisors = $this->divisors();

        foreach ($divisors as $divisor) {
            $result += $divisor;
        }

        return $result < $this->num;
    }

    /**
     * Counts the divisors of a number.
     * @return int
     */
    public function countDivisors()
    {
        if ($this->num == 1) {
            return 1;
        }

        $this->primefactors();

        $divisors = 1;

        $primes = array_count_values($this->factor);
        foreach($primes as $prime) {
            $divisors *= ++$prime;
        }

        return $divisors;
    }

    /**
     * Prime factors decomposer.
     */
    private function primefactors()
    {
        $this->factor = [];
        $run = true;

        while($run && @$this->factor[0] != $this->num) {
            $run = $this->factors();
        }
    }

    /**
     * Factors of a number accessor.
     *
     * @return bool|void
     */
    private function factors()
    {
        if($this->num == 1) {
            return ;
        }

        $root = ceil(sqrt($this->num)) + 1;

        $i = 2;
        while($i <= $root) {
            if($this->num % $i == 0) {
                $this->factor[] = $i;
                $this->num = $this->num / $i;

                return true;
            }
            $i++;
        }
        $this->factor[] = $this->num;

        return false;
    }
}
