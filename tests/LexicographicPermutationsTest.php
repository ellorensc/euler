<?php

namespace tests;

use euler\problem24\LexicographicPermutation;
use PHPUnit_Framework_TestCase;

/**
 * Class LexicographicPermutationsTest
 * @package tests
 */
class LexicographicPermutationsTest extends PHPUnit_Framework_TestCase
{
    public function testResolveTheMillionthLexicographicPermutation()
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );

        $elements = [0,1,2,3,4,5,6,7,8,9];
        $lexicograph = new LexicographicPermutation();

        $this->assertEquals(
            1,
            $lexicograph->calculate($elements, 1000000)
        );
    }
}
