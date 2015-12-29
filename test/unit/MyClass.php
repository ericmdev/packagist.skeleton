<?php
/**
 * MyVendorName (http://example.io)
 *
 * @package   MyPackageName
 * @link      https://github.com/user/repo
 * @license   http://opensource.org/licenses/MIT MIT
 */
namespace MyVendorName\MyPackageNameTest;

use MyVendorName\MyPackageName\MyClass;

class MyClass_UnitTest
extends MyClassTestCase
{
    /**
     * @group        specification
     * @dataProvider provider
     */
    public function testSomething($data)
    {
        $myClass = new MyClass($data);
        $this->assertInstanceOf('MyVendorName\\MyPackageName\\MyClass', $myClass); 
    }

    /**
     * @group        regresssion
     * @dataProvider provider
     */
    public function testSomethingElse($data)
    {
        $myClass = new MyClass($data);
        $this->assertSame(true, true);
    }

    /**
     * @dataProvider             provider
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Expected string
     */
    public function testSomeException($data)
    {  
        $myClass = new MyClass($data);
        $myClass->myMethod(1);
    }
}
