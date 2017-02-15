<?php

namespace tests;

use euler\problem29\DisctinctPowers;
use PHPUnit_Framework_TestCase;

/**
 * Class DistinctPowersTest
 * @package tests
 */
class DistinctPowersTest extends PHPUnit_Framework_TestCase
{    /**
 * @expectedException \Exception
 */

    public function testIfWeDoNotHaveSetTheCombinationBaseWeExpectAnException()
    {
        $distinctPowers = new DisctinctPowers(null, 100);

        $this->assertEquals(1, $distinctPowers->calculate());
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetTheCombinationExponentWeExpectAnException()
    {
        $distinctPowers = new DisctinctPowers(2, null);

        $this->assertEquals(1, $distinctPowers->calculate());
    }

    public function testWeFindTheTotalNumberOfDistinctTermsInTheSequence()
    {
        $distinctPowers = new DisctinctPowers(2, 100);

        $this->assertEquals(9183, $distinctPowers->calculate());
    }
}
