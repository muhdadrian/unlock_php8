<?php

# Strict types

// The declare(strict_types=1); in PHP 7+ allows you to force values to be of the exact type expected. This is called strict typing. Without this declaration, PHP attempts to convert types intelligently, which is called weak typing.

declare(strict_types=1);

function add(int $a, int $b) : int {
    return $a + $b;
}
echo add("1", "2");  // Error! Strings cannot be converted to integers automatically in strict mode

/*
This example illustrates that with strict_types enabled, data types must be exact. The add function expects two integers, and you cannot supply a string that contains a number.

Using strict_types can lead to cleaner and less error-prone code, as it enforces data type consistency and prevents automatic and possibly erroneous type conversions. This can help to avoid subtle, hard-to-detect bugs that can arise due to weak typing.
*/