<?php

declare(strict_types=1);

class Name
{
    public function __toString()
    {
        return 'Jane Doe';
    }
}

function printToConsole(string|Stringable $data): void
{
    echo "And the data is: " . $data . PHP_EOL;
}

$name = new Name();

printToConsole($name);
printToConsole('Test');