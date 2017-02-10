<?php

namespace tests;

use euler\problem12\TriangleNumber;
use PHPUnit_Framework_TestCase;

/**
 * Class TriangleNumberTest
 * @package tests
 */
class TriangleNumberTest extends PHPUnit_Framework_TestCase
{
    /** @var  int */
    private $divisors;

    protected function setUp()
    {
        $this->divisors = 500;
    }

    protected function tearDown()
    {
        $this->divisors = null;
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveDefinedTheMinimumNumberOfDivisorsWeWouldExpectAnException()
    {
        $this->divisors = null;
        $triangle = new TriangleNumber($this->divisors);

        $this->assertEquals(76576500, $triangle->findByMinimumNumberOfDivisors());
    }

    public function testWeFindTheValueOfTheFirstTriangleNumberToHaveOverFiveHundredDivisors()
    {
        $triangle = new TriangleNumber($this->divisors);

        $this->assertEquals(76576500, $triangle->findByMinimumNumberOfDivisors());
    }
}