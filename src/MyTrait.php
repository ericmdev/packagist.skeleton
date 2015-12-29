<?php
/**
 * MyVendorName (http://example.io)
 *
 * @package   MyPackageName
 * @link      https://github.com/user/repo
 * @license   http://opensource.org/licenses/MIT MIT
 */
namespace MyVendorName\MyPackageName;

/**
 * MyTrait: Example trait.
 *
 * Provides some shared behaviour.
 */
trait MyTrait
{
    /**
     * My Trait Method.
     *
     * @return str
     */
    public function myTraitMethod($var) 
    {
        if(!is_int($var))
            throw new InvalidArgumentException(
                "Expected int ...", 
                1
            );
        else
            echo "myTraitMethod (int): $var\n";
    }
}
