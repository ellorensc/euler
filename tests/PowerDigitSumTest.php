<?php

namespace tests;

use euler\problem16\PowerDigitSum;
use PHPUnit_Framework_TestCase;

class PowerDigitSumTest extends PHPUnit_Framework_TestCase
{
    public function testWeFindTheRightPowerSumDigitSolution()
    {
        $powerDigit = new PowerDigitSum();

        $this->assertEquals(1366, $powerDigit->calculate());
    }
}