<?php

namespace tests;

use euler\problem1\FindTheSumOfAllMultiples;
use euler\problem1\FindTheSumOfAllMultiplesPolynomial;
use PHPUnit_Framework_TestCase;

class FindTheSumOfAllMultiplesTest extends PHPUnit_Framework_TestCase
{
    /** @var  FindTheSumOfAllMultiples */
    private $multiple;
    /** @var  FindTheSumOfAllMultiplesPolynomial */
    private $anotherMultiple;
    /** @var  int */
    private $firstCandidate;
    /** @var  int */
    private $secondCandidate;
    /** @var  int */
    private $maxLimit;

    protected function setUp()
    {
        $this->firstCandidate = 3;
        $this->secondCandidate = 5;
        $this->maxLimit = 1000;

        $this->multiple = new FindTheSumOfAllMultiples(
            $this->firstCandidate,
            $this->secondCandidate,
            $this->maxLimit
        );

        $this->anotherMultiple = new FindTheSumOfAllMultiplesPolynomial(
            $this->firstCandidate,
            $this->secondCandidate,
            $this->maxLimit
        );
    }

    protected function tearDown()
    {
        $this->firstCandidate = null;
        $this->secondCandidate = null;
        $this->maxLimit = null;
        $this->multiple = null;
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveTwoCandidatesWeWouldExpectAnException()
    {
        $this->multiple->setFirstCandidate(0);

        $this->assertEquals(233168, $this->multiple->find());
    }

    /**
     * @expectedException \Exception
     */
    public function testIfWeDoNotHaveSetTheMaxLimitWeWouldExpectAnException()
    {
        $this->multiple->setMaxLimit(0);

        $this->assertEquals(233168, $this->multiple->find());
    }

    public function testCandidatesArePrimeNumbers()
    {
        $this->assertTrue($this->multiple->candidatesArePrimeNumbers());
    }

    public function testWeGetAValidSolutionForAConcreteConfiguration()
    {
        $this->assertEquals(233168, $this->multiple->find());
    }

    public function testBruteForceAndPolynomialMethodsProvideTheSameSolution()
    {
        $bruteForceSolution = $this->multiple->find();
        $polynomialSolution = $this->anotherMultiple->find();

        $this->assertEquals($bruteForceSolution, $polynomialSolution);
    }
}