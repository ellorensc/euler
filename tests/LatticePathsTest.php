<?php

namespace tests;

use euler\problem15\LatticePath;
use PHPUnit_Framework_TestCase;

class LatticePathsTest extends PHPUnit_Framework_TestCase
{
    public function testGetTheLatticePathsForATwentyPerTwentyMatrix()
    {
        $latticePath = new LatticePath();

        $this->assertEquals(137846528820, $latticePath->latticePaths([], 20, 20));
    }
}