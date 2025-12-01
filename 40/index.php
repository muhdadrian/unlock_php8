<?php

declare(strict_types=1);

# Creating functions in PHP

// In PHP, a function is defined using the function keyword, followed by a unique function name.

function myFunction() {
      // function code
}


function sumInteger(int $num1, int $num2): int {
    return $num1 + $num2;
}
    echo sumInteger(2, 2); //output: 4

    echo '<br>';

// if we try to call the sumInteger() function with an argument that is not an integer, such as a string, PHP returns an error:
    
echo sumInteger("1", 2); // Error: Argument 1 passed to sumInteger() must be of the type int, string given