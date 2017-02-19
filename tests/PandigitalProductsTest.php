<?php

namespace tests;

use euler\problem32\PandigitalProducts;
use PHPUnit_Framework_TestCase;

/**
 * Class PandigitalProductsTest
 * @package tests
 */
class PandigitalProductsTest extends PHPUnit_Framework_TestCase
{
    public function testFindTeSumOfAllProductsWhoseMultiplicandMultiplierOrProductIdentityCanBeWrittenAsAOneThroughNinePandigital()
    {
        $pandigital = new PandigitalProducts();

        $this->assertEquals(45228, $pandigital->calculate());
    }
}
