<?php
/**
 * MyVendorName (http://example.io)
 *
 * @package   MyPackageName
 * @link      https://github.com/user/repo
 * @license   http://opensource.org/licenses/MIT MIT
 */
namespace MyVendorName\MyPackageNameTest;

/** 
 * MyClassTestCase
 *
 */ 
abstract class MyClassTestCase
extends \PHPUnit_Framework_TestCase
{
    public function provider()
    {
        return [
            [array('opt-1' => 'Some data')]
        ];
    }

    public function setUp()
    {
        // ...
    }

    public function tearDown()
    { 
        // ...
    }
}
