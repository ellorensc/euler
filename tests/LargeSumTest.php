<?php

namespace tests;

use euler\problem13\LargeSum;
use PHPUnit_Framework_TestCase;

/**
 * Class LargeSumTest
 * @package tests
 */
class LargeSumTest extends PHPUnit_Framework_TestCase
{
    public function testWeFindTheFirstTenDigitsOfTheSumOfOneHundredFiftyDigitNumbers()
    {
        $largeSum = new LargeSum();

        $this->assertEquals(5.537376230, $largeSum->calculate());
    }
}
