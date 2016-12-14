<?php

namespace utilities;

/**
 * Class Divisors
 * @package utilities
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
     * Counts the divisors of a number.
     *
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
