<?php
namespace tests;

use euler\problem19\CountingSundays;
use PHPUnit_Framework_TestCase;

/**
 * Class CountingSundaysTest
 * @package tests
 */
class CountingSundaysTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetTheStartingYearWeExpectsAnException()
    {
        $sundays = new CountingSundays(null, 2000);

        $this->assertEquals(171, $sundays->firstOfTheMonthSundays());
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetTheEndingYearWeExpectsAnException()
    {
        $sundays = new CountingSundays(1901, null);

        $this->assertEquals(171, $sundays->firstOfTheMonthSundays());
    }

    public function testHowManySundaysFeltOnFirstOfTheMonthDuringTwentiethCentury()
    {
        $sundays = new CountingSundays(1901, 2000);

        $this->assertEquals(171, $sundays->firstOfTheMonthSundays());
    }
}
