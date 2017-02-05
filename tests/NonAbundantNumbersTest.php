<?php

namespace tests;

use euler\problem23\NonAbundantSums;
use PHPUnit_Framework_TestCase;

/**
 * Class NonAbundantNumbersTest
 * @package tests
 */
class NonAbundantNumbersTest extends PHPUnit_Framework_TestCase
{
    public function testCalculateTheNonAbundantNumbersSum()
    {
        $nonAbundantSums = new NonAbundantSums();

        $this->assertEquals(4179871, $nonAbundantSums->calculate());
    }
}
