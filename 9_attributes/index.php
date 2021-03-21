<?php

declare(strict_types=1);

#[Attribute]
class MyFirstAttribute
{
    public function __construct(
        public string $metadata
    )
    {}
}

#[MyFirstAttribute('my-metadata')]
class TestClass
{

}

$reflectionClass = new ReflectionClass(TestClass::class);
$attributes = $reflectionClass->getAttributes();

$attribute = $attributes[0];

var_dump($attribute->newInstance());