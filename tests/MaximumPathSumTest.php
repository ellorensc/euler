<?php

namespace tests;

use euler\problem18\MaximumPathSum;
use PHPUnit_Framework_TestCase;

class MaximumPathSumTest extends PHPUnit_Framework_TestCase
{
    public function testSumTheMaximumPathSum()
    {
        $maximumPathSum = new MaximumPathSum();

        $this->assertEquals(1074, $maximumPathSum->calculate());
    }
}
