<?php

namespace tests;

use euler\problem31\CoinSums;
use PHPUnit_Framework_TestCase;

/**
 * Class CoinSumsTest
 * @package tests
 */
class CoinSumsTest extends PHPUnit_Framework_TestCase
{
    public function testCoinSum()
    {
        $coinSum = new CoinSums();

        $this->assertEquals(73682, $coinSum->calculate());
    }
}