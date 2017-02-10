<?php

namespace tests;

use euler\problem28\NumberSpriralDiagonals;
use PHPUnit_Framework_TestCase;

/**
 * Class NumberSpiralDiagonalsTest
 * @package tests
 */
class NumberSpiralDiagonalsTest extends PHPUnit_Framework_TestCase
{
    public function testDiagonalSum()
    {
        $numberSpiralDiagonals = new NumberSpriralDiagonals();

        $this->assertEquals(669171001, $numberSpiralDiagonals->calculate());
    }
}