<?php

namespace tests;

use euler\problem26\ReciprocalCycles;
use PHPUnit_Framework_TestCase;

/**
 * Class ReciprocalCyclesTest
 * @package tests
 */
class ReciprocalCyclesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotInitializeALimitWeExpectAnException()
    {
        $reciprocal = new ReciprocalCycles(null);

        $this->assertEquals(983, $reciprocal->calculate());
    }

    public function testFindTheLongestRecurringCycle()
    {
        $reciprocal = new ReciprocalCycles(1000);

        $this->assertEquals(983, $reciprocal->calculate());
    }
}
