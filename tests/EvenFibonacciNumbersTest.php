<?php

namespace tests;

use euler\problem2\EvenFibonacciNumbers;
use PHPUnit_Framework_TestCase;

/**
 * Class EvenFibonacciNumbersTest
 * @package tests
 */
class EvenFibonacciNumbersTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetAValidLimitWeWouldExpectAnException()
    {
        $fibonacciSequence = new EvenFibonacciNumbers(0);

        $this->assertEquals(4613732, $fibonacciSequence->calculate());
    }

    public function testTheFibonacciSequenceResultWhoseValuesDoNotExceedFourMillion()
    {
        $fibonacciSequence = new EvenFibonacciNumbers(4000000);

        $this->assertEquals(4613732, $fibonacciSequence->calculate());
    }
}
