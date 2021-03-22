<?php

declare(strict_types=1);

class CustomerData
{
    public function __construct(private string $name, private string $email, private int $age)
    {
    }
}

$data = new CustomerData(
    'Marek',
    'test@example.com',
    12,
);

var_dump($data);