<?php

# Union types

function getDataType(int|float|string $data): string {
    return gettype($data);
    }
    echo getDataType("Hello");  // Outputs: string
    echo '<br>';
    echo getDataType(123);      // Outputs: integer
    echo '<br>';
    echo getDataType(123.45);   // Outputs: double

    // In the above example, the function accepts and processes different types of data thanks to PHPʼs union types feature. This feature increases the flexibility and robustness of PHP code, allowing you to write more generic and reusable functions.