<?php

declare(strict_types=1);

// pokazi promoted property preko phpstorma

class MyClass
{
    public string $a;

    private string $b;

    public function __construct(string $a = 'first', string $b = 'second')
    {
        $this->a = $a;
        $this->b = $b;
    }
}

echo (new MyClass())->a;

class MyClass2
{
    public function __construct(public string $a = 'first', private string $b = 'second')
    {
    }
}

echo (new MyClass2())->a;