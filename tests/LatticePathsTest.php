<?php

namespace tests;

use euler\problem15\LatticePath;
use PHPUnit_Framework_TestCase;

/**
 * Class LatticePathsTest
 * @package tests
 */
class LatticePathsTest extends PHPUnit_Framework_TestCase
{
    public function testGetTheLatticePathsForATwentyPerTwentyMatrix()
    {
        $latticePath = new LatticePath();

        $this->assertEquals(137846528820, $latticePath->combinationalLatticePaths(20));
    }
}
