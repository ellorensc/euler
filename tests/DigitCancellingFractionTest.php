<?php

namespace tests;

use euler\problem33\DigitCancellingFraction;
use PHPUnit_Framework_TestCase;

/**
 * Class DigitCancellingFractionTest
 * @package tests
 */
class DigitCancellingFractionTest extends PHPUnit_Framework_TestCase
{
    public function testWeFindTheLowestDenominator()
    {
        $digitCancellingFraction = new DigitCancellingFraction();

        $this->assertEquals(100, $digitCancellingFraction->calculate());
    }
}
