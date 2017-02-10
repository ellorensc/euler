<?php

namespace tests;

use euler\problem10\SummationPrimes;
use PHPUnit_Framework_TestCase;

/**
 * Class SummationPrimesTest
 * @package tests
 */
class SummationPrimesTest extends PHPUnit_Framework_TestCase
{
    /** @var  int */
    private $limit;
    /** @var  int */
    private $method;

    protected function setUp()
    {
        $this->limit = 2000000;
        $this->method = 1001;
    }

    protected function tearDown()
    {
        $this->limit = null;
        $this->method = null;
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveDefinedTheMethodWeWouldExpectAnException()
    {
        $this->method = null;
        $summationPrimes = new SummationPrimes($this->limit, $this->method);

        $this->assertEquals(142913828922, $summationPrimes->calculate());
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeHaveDefinedAnInvalidMethodWeWouldExpectAnException()
    {
        $this->method = 12345;
        $summationPrimes = new SummationPrimes($this->limit, $this->method);

        $this->assertEquals(142913828922, $summationPrimes->calculate());
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveDefinedTheLimitWeWouldExpectAnException()
    {
        $this->limit = null;
        $summationPrimes = new SummationPrimes($this->limit, $this->method);

        $this->assertEquals(142913828922, $summationPrimes->calculate());
    }

    public function testWeFindTheCorrectSolutionThroughNaturalLoopingMethod()
    {
        $summationPrimes = new SummationPrimes($this->limit, $this->method);

        $this->method = 1000;

        $this->assertEquals(142913828922, $summationPrimes->calculate());
    }

    public function testWeFindTheCorrectSolutionThroughEratosthenesMethod()
    {
        $summationPrimes = new SummationPrimes($this->limit, $this->method);

        $this->assertEquals(142913828922, $summationPrimes->calculate());
    }
}
