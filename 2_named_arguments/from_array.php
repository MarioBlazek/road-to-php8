<?php

declare(strict_types=1);

class CustomerData
{
    public function __construct(public string $name, public string $email, public int $age)
    {
    }
}

$values = [
    'name' => 'Marek',
    'email' => 'test@example.com',
    'age' => 12,
];

$data = new CustomerData(...$values);

var_dump($data);