<?php

namespace tests;

use euler\problem20\FactorialDigitSum;
use PHPUnit_Framework_TestCase;

class FactorialDigitSumTest extends PHPUnit_Framework_TestCase
{
    public function testWeResolveTheFactorialDigitSumForAGivenNumber()
    {
        $factorialDigitSum = new FactorialDigitSum();

        $this->assertEquals(648, $factorialDigitSum->calculate('100'));
    }
}
