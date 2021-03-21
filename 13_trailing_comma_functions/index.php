<?php

declare(strict_types=1);

class CustomerData
{
    public function __construct(public string $name, public string $email, public int $age)
    {
    }

    public static function createFromData(string $name, string $email, int $age)
    {
        return new self($name, $email, $age);
    }
}

$data = CustomerData::createFromData(
    'Marek',
    'test@example.com',
    12,
);

var_dump($data);