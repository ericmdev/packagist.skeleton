<?php
require '../vendor/autoload.php';
use MyVendorName\MyPackageName\MyClass;

/* Valid construction. */
$MyClass = new MyClass(['opt-1' => true]);
echo 'MYCONST: ', $MyClass::MYCONST, "\n";
$MyClass->myMethod("Hello, World!");
$MyClass->myTraitMethod(300);
$MyClass::myFinalMethod(true);

/* Invalid construction. */
/*
try { 
    $MyClass = new MyClass(false);
} catch (TypeError $e) {
    echo "Argument 1 passed to MyClass constructor must be an array.\n";
}
*/
