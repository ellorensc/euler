<?php

namespace tests;

use euler\problem6\Square;
use PHPUnit_Framework_TestCase;

/**
 * Class SquareTest
 * @package tests
 */
class SquareTest extends PHPUnit_Framework_TestCase
{
    /** @var  int */
    private $limit;

    protected function setUp()
    {
        $this->limit = 100;
    }

    protected function tearDown()
    {
        $this->limit = null;
    }

    /**
     * @expectedException \Exception
     */
    public function testWeExpectAnExceptionIfWeDoNotSetACorrectLimit()
    {
        $square = new Square(-1000);

        $this->assertEquals($this->limit, $square->sumSquareDifference());
    }

    public function testResolveTheDifferenceBetweenTheSumOfTheSquaresOfTheFirstTenNaturalNumbersAndTheSquareOfTheSum()
    {
        $square = new Square(10);

        $this->assertEquals(2640, $square->sumSquareDifference());
    }

    public function testResolveTheDifferenceBetweenTheSumOfTheSquaresOfTheFirstOneHundredNaturalNumbersAndTheSquareOfTheSum()
    {
        $square = new Square($this->limit);

        $this->assertEquals(25164150, $square->sumSquareDifference());
    }

    public function testResolveTheDifferenceBetweenTheSumOfTheSquaresOfTheFirstOneThousandNaturalNumbersAndTheSquareOfTheSum()
    {
        $square = new Square(1000);

        $this->assertEquals(250166416500, $square->sumSquareDifference());
    }
}