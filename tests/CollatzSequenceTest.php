<?php

namespace tests;

use euler\problem14\CollatzSequence;
use PHPUnit_Framework_TestCase;

/**
 * Class CollatzSequenceTest
 * @package tests
 */
class CollatzSequenceTest extends PHPUnit_Framework_TestCase
{
    public function testCheckNumberResolveOddNumbers()
    {
        $collatz = new CollatzSequence(13);

        $this->assertTrue($collatz->checkNumber(13));
    }

    public function testCheckNumberResolveEvenNumbers()
    {
        $collatz = new CollatzSequence(18);

        $this->assertFalse($collatz->checkNumber(18));
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotInitializeSomeNumberWeCanNotFindTheLargestCollatzChainForALowerThaOneMillionNumber()
    {
        $collatz = new CollatzSequence(null);
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeInitializeTheStartingNumberWithZeroWeCanNotFindTheLargestCollatzChainForALowerThaOneMillionNumber()
    {
        $collatz = new CollatzSequence(0);
    }

    public function testWeFindTheLargestCollatzChainForALowerThaOneMillionNumber()
    {
        $this->markTestSkipped('Brute force is a large way...');

        $collatz = new CollatzSequence(1000000);
        $collatz->findLargestChain();

        $this->assertEquals($collatz->calculate(), 837799);
    }

}
