<?php
namespace tests;

use euler\problem17\NumberLetterCounts;
use PHPUnit_Framework_TestCase;

/**
 * Class NumberLetterCountsTest
 * @package tests
 */
class NumberLetterCountsTest extends PHPUnit_Framework_TestCase
{
    public function testDebug()
    {
        $numberLetter = new NumberLetterCounts();

        $this->assertEquals(21124, $numberLetter->calculate());
    }
}
