<?php

namespace tests;

use euler\problem22\NamesScores;
use PHPUnit_Framework_TestCase;

class NamesScoresTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testWeExpectAnExceptionIfWeDoNotHaveDefinedTheFilename()
    {
        $nameScore = new NamesScores(null);
        $nameScore->sortNames();

        $this->assertEquals(871198282, $nameScore->calculate());
    }

    public function testWeObtainTheRightNamesScores()
    {
        $nameScore = new NamesScores('../src/euler/problem22/p022_names.txt');
        $nameScore->sortNames();

        $this->assertEquals(871198282, $nameScore->calculate());
    }
}
