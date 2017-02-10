<?php

namespace tests;

use euler\problem21\AmicableNumbers;
use PHPUnit_Framework_TestCase;

/**
 * Class AmicableNumbersTest
 * @package tests
 */
class AmicableNumbersTest extends PHPUnit_Framework_TestCase
{
    public function testResolveTheAmicableNumbersUnderOneThousand()
    {
        $amicableNumbers = new AmicableNumbers();

        $this->assertEquals(31626, $amicableNumbers->calculate());
    }
}
