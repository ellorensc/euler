<?php

namespace tests;

use euler\problem25\NenthDigitFibonacciNumber;
use PHPUnit_Framework_TestCase;

/**
 * Class NenthFibonacciNumberTest
 * @package tests
 */
class NenthDigitFibonacciNumberTest extends PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotInitializeTheDigitsWeExpectAnException()
    {
        $fibonacciNumber = new NenthDigitFibonacciNumber(null);

        $this->assertEquals(4782, $fibonacciNumber->calculate());
    }

    public function testWeFindTheFirstTermInTheFibonacciSequenceToHaveMoreThanOneThousandDigits()
    {
        $fibonacciNumber = new NenthDigitFibonacciNumber(1000);

        $this->assertEquals(4782, $fibonacciNumber->calculate());
    }
}