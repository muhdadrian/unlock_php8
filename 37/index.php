<?php

declare(strict_types=1);

// Up to version 7, PHP was known to be a weakly typed language: in other words, it did not force to define the types of a variable when it was created and did not prevent changing the type of the variable during system execution.

// However, from version 7.4 PHP changed this concept, at least in the scope of object orientation and functions, where today it allows defining the type of input variables as return.

// Typing is a PHP feature that lets you specify the type of value a function should take as arguments (parameter typing) and the type of value a function should return (return typing). This helps ensure that the code behaves as expected, as PHP will throw an error if a value of the wrong type is passed or returned.

//Using the previous function example, you will notice that we defined both the parameter variable type and the function return type in the showMessage function:

function showMessage(string $name): string {
    return "Hello, {$name}!";
}

echo showMessage(2);

// Note that we identified that $name is a string and we expect that the function return is also a string, if for some reason the parameter $name receives a value other than a string, being for example an integer value we will have a fatal error with something similar therefore:
    
// Fatal error: Uncaught TypeError: Argument 1 passed to showMessage() must be of the type string, int given

// In PHP 8, functions can use union types and named arguments, allowing for greater flexibility and readability in function usability.