<?php

declare(strict_types=1);

class MyClass
{

}

$myClass = new MyClass();



var_dump(MyClass::class);
var_dump(get_class($myClass));
var_dump($myClass::class);