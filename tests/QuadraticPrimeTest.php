<?php

namespace tests;

use euler\problem27\QuadraticPrime;
use PHPUnit_Framework_TestCase;

/**
 * Class QuadraticPrimeTest
 * @package tests
 */
class QuadraticPrimeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotInitializeTheLimitWeExpectAnException()
    {
        $quadratic = new QuadraticPrime(null);

        $this->assertEquals(-59231, $quadratic->calculate());
    }

    public function testWeFindTheProductOfTheCoefficientsForTheQuadraticExpressionThatProducesTheMaximumNumberOfPrimesForConsecutiveValuesOfN()
    {
        $quadratic = new QuadraticPrime(1000);

        $this->assertEquals(-59231, $quadratic->calculate());
    }
}
