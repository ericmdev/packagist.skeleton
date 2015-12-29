<?php
/**
 * MyVendorName (http://example.io)
 *
 * @package   MyPackageName
 * @link      https://github.com/user/repo
 * @license   http://opensource.org/licenses/MIT MIT
 */
namespace MyVendorName\MyPackageName;

use InvalidArgumentException;

/**
 * MyClass: Example class.
 *
 * A short description.
 */
class MyClass implements MyClassInterface
{
    /**
     * @access protected
     * @var    array
     */
    protected $_config;

    /**
     * Constructor.
     *
     */
    public function __construct(array $config)
    { 
        $this->_config = $config;
    }

    /**
     * My Method.
     *
     */
    public function myMethod($var)
    { 
        if(!is_string($var))
            throw new InvalidArgumentException(
                "Expected string ...", 
                1
            );
        else
            echo "myMethod (str): $var\n";
    }
}
