<?php

namespace tests;

use euler\problem5\Multiple;
use PHPUnit_Framework_TestCase;

/**
 * Class MultipleTest
 * @package tests
 */
class MultipleTest extends PHPUnit_Framework_TestCase
{
    /** @var  int */
    private $limit;

    protected function setUp()
    {
        $this->limit = 20;
    }

    protected function tearDown()
    {
        $this->limit = null;
    }

    /**
     * @expectedException \Exception
     */
    public function testWeExpectAnExceptionIfWeDoNotHaveSetACorrectLimit()
    {
        $multiple = new Multiple(0);

        $this->assertEquals(232792560, $multiple->smallest());

    }

    public function testWeGetTheSmallestPositiveNumberThatIsEvenlyDivisibleByAllOfTheNumbersFromOneToTwenty()
    {
        $multiple = new Multiple($this->limit);

        $this->assertEquals(232792560, $multiple->smallest());
    }

    public function testWeGetTheSmallestPositiveNumberThatIsEvenlyDivisibleByAllOfTheNumbersFromOneToThirty()
    {
        $multiple = new Multiple(30);

        $this->assertEquals(2329089562800, $multiple->smallest());
    }
}
