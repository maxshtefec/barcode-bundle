<?php

namespace MWSimple\BarcodeBundle\Tests\Type;

use PHPUnit_Framework_TestCase;
use MWSimple\BarcodeBundle\Type\Type;

/**
 * Class TypeTest
 *
 * @package MWSimple\BarcodeBundle\Tests\Type
 */
class TypeTest extends PHPUnit_Framework_TestCase
{
    /**
     * testConfigureOptions
     *
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        $type = new Type();
        $type->getDimension('Unknown Type');
    }
}
