<?php

declare(strict_types=1);

function printToConsole(mixed $data): void
{
    echo "And the data is: " . (string)$data . PHP_EOL;
}

printToConsole('Test');
printToConsole(1);
printToConsole(12.3);