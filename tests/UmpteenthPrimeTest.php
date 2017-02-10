<?php

namespace tests;

use euler\problem7\UmpteenthPrime;
use PHPUnit_Framework_TestCase;

/**
 * Class UmpteenthPrimeTest
 * @package tests
 */
class UmpteenthPrimeTest extends PHPUnit_Framework_TestCase
{
    /** @var  int */
    private $limit;

    public function setUp()
    {
        $this->limit = 10001;
    }

    public function tearDown()
    {
        $this->limit = null;
    }

    public function testWeFindTheUmpteenthPrimeNumber()
    {
        $umpteenthPrime = new UmpteenthPrime($this->limit);

        $this->assertEquals(104743, $umpteenthPrime->calculate());
    }

    public function testTheUmpteenthNumberWeHaveFoundIsPrime()
    {
        $umpteenthPrime = new UmpteenthPrime($this->limit);

        $this->assertTrue($umpteenthPrime->isPrime(104743));

    }
}
