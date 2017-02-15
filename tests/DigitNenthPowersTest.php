<?php

namespace tests;

use euler\problem30\DigitNenthPowers;
use PHPUnit_Framework_TestCase;

/**
 * Class DigitNenthPowersTest
 * @package tests
 */
class DigitNenthPowersTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotKnowTheNumberOfDigitsWeExpectAnException()
    {
        $digitsNthPowers = new DigitNenthPowers(null);
        $digitsNthPowers->init();

        $this->assertEquals(1, $digitsNthPowers->calculate());
    }

    public function testWeFindTheSumOfAllTheNumbersThatCanBeWrittenAsTheSumOfFifthPowersOfTheirDigits()
    {
        $digitsNthPowers = new DigitNenthPowers(5);
        $digitsNthPowers->init();

        $this->assertEquals(443839, $digitsNthPowers->calculate());
    }
}
