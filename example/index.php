<?php
require '../vendor/autoload.php';
use MyVendorName\MyPackageName\MyClass;

$MyClass = new MyClass(['opt-1' => true]);
echo 'MYCONST: ', $MyClass::MYCONST, "\n";
$MyClass->myMethod("Hello, World!");
$MyClass->myTraitMethod(300);
$MyClass->myFinalMethod(true);
