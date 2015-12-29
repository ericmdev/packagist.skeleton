PHP: Package
============

[![Build Status](https://travis-ci.org/rocketphp/html.svg?branch=master)](https://travis-ci.org/ericmdev/php.package.svg)
[![Coverage Status](https://coveralls.io/repos/ericmdev/php.package/badge.svg?branch=develop&service=github)](https://coveralls.io/github/ericmdev/php.package?branch=develop)
[![Dependency Status](https://www.versioneye.com/user/projects/5681f7a2eb4f47003c0009a3/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5681f7a2eb4f47003c0009a3)

PHP package skeleton.

Remember to publish to your package to [Packagist](https://packagist.org/).

Usage
-----

Clone repo:

    $ git clone <repo> <project_name>

Start writing your package.

Example
-------

Example package usage in `./example/index.php`:

    $ cd ./example/
    $ php -f index.php
    
    # MYCONST: EXAMPLE
    # myMethod (str): Hello, World!
    # myTraitMethod (int): 300
    # myFinalMethod (bool): 1

Development
-----------

Run `composer update` as required.

PHPUnit tests are configured in `./phpunit.xml`:

    $ phpunit
