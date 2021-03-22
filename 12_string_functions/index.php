<?php

declare(strict_types=1);


if (strpos('string with lots of words', 'words') !== false) {

}

if (str_contains('string with lots of words', 'words')) {

}

var_dump(str_starts_with('haystack', 'hay'));
var_dump(str_ends_with('haystack', 'stack'));