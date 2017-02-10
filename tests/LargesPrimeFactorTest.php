<?php

namespace tests;

use euler\problem3\LargestPrimeFactor;
use PHPUnit_Framework_TestCase;

/**
 * Class LargesPrimeFactorTest
 * @package tests
 */
class LargesPrimeFactorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetAValidLimitWeWouldExpectAnException()
    {
        $fibonacciSequence = new LargestPrimeFactor(0);

        $this->assertEquals(6857, $fibonacciSequence->calculate());
    }

    public function testTheFibonacciSequenceResultWhoseValuesDoNotExceedFourMillion()
    {
        $fibonacciSequence = new LargestPrimeFactor(600851475143);

        $this->assertEquals(6857, $fibonacciSequence->calculate());
    }
}
