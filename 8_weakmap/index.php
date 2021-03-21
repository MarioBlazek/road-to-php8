<?php


// long running processes
// caching scenarios
// mostly no needed in everyday use

$weakMap = new WeakMap();

class MyClass
{

}

$myFirstClass = new MyClass();
$mySecondClass = new MyClass();

$weakMap[$myFirstClass] = 'Something';
$weakMap[$mySecondClass] = 'Something else';

echo $weakMap[$mySecondClass];


echo count($weakMap);

unset($myFirstClass);

