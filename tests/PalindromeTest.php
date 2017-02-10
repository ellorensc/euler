<?php

namespace tests;

use euler\problem4\Palindrome;
use PHPUnit_Framework_TestCase;

/**
 * Class PalindromeTest
 * @package tests
 */
class PalindromeTest extends PHPUnit_Framework_TestCase
{
    public function testWeGetTheLargestPalindromeMadeFromTheProductOfTwoThreeDigitNumbers()
    {
        $palindrome = new Palindrome(3);

        $this->assertEquals(906609, $palindrome->largestPalindrome());
    }
}
