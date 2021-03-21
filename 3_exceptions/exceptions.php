<?php

declare(strict_types=1);

try {

    throw new \Exception();

} catch (\Exception $exception) {
    echo "This is how we would normally do it.";
}

try {

    throw new \Exception();

} catch (\Exception) {
    echo "This is how we can do it now.";
}


try {

    $myClosure = fn() => throw new \Exception();
    $myClosure();

} catch (\Exception) {
    echo "Boom.";
}

try {

    $result = true;
    $result ? throw new \Exception() : false;

} catch (\Exception) {
    echo "Boom.";
}

try {

    $username = $_GET['username'] ?? throw new \Exception();

} catch (\Exception) {
    echo "Boom.";
}