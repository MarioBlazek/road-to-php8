<?php

// $statusCode = '200';
//$statusCode = 200;
$statusCode = 999;

switch ($statusCode) {
    case 200:
    case 300:
        $messageFromSwitch = 'ok';
        break;
    case 400:
        $messageFromSwitch = 'not found';
        break;
    case 500:
        $messageFromSwitch = 'server error';
        break;
    default:
        $messageFromSwitch = 'unknown';
        break;
}

try {
    $messageFromMatch = match ($statusCode) {
        200, 300 => 'ok',
        400 => 'not found',
        500 => 'server error',
//    default => 'unknown',
        default => new \Exception("bla"),
    };
} catch (\Throwable $e) {
    echo "Stari moj";
}

echo "switch: {$messageFromSwitch}" . PHP_EOL;
echo "match: {$messageFromMatch}" . PHP_EOL;