<?php

declare(strict_types=1);

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

echo $weakMap[$mySecondClass] . PHP_EOL;

echo "Elements in map:" . count($weakMap) . PHP_EOL;

unset($myFirstClass);

echo "Elements in map:" . count($weakMap) . PHP_EOL;
