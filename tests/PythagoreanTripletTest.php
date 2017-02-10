<?php

namespace tests;

use euler\problem9\PythagoreanTriplet;
use PHPUnit_Framework_TestCase;

/**
 * Class PythagoreanTripletTest
 * @package tests
 */
class PythagoreanTripletTest extends PHPUnit_Framework_TestCase
{
    /** @var  int */
    private $solution;

    protected function setUp()
    {
        $this->solution = 1000;
    }

    protected function tearDown()
    {
        $this->solution = null;
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetTSomeSolutionWeWouldExpectAnException()
    {
        $this->solution = null;
        $pythagoreanTriplet = new PythagoreanTriplet($this->solution);

        $this->assertEquals(31875000, $pythagoreanTriplet->calculate());
    }

    public function test()
    {
        $pythagoreanTriplet = new PythagoreanTriplet($this->solution);

        $this->assertEquals(31875000, $pythagoreanTriplet->calculate());
    }
}
