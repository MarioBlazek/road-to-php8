<?php

declare(strict_types=1);

function printToConsole(int|float|string $data): void
{
    echo "And the data is: " . (string)$data . PHP_EOL;
}


printToConsole(10);
printToConsole(10.5);
printToConsole('test');