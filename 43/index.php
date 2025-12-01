<?php

# Variadic functions

/*
Variadic functions, also known as variable argument functions, are a very useful feature in the PHP programming language that allow a function to accept an arbitrary number of arguments. This can be particularly useful in situations where the number of arguments to a function is not known in advance.
*/

/*
The syntax for variadic functions in PHP is quite simple. Just put three dots (...) before the name of the last parameter in the function declaration. This last parameter will then become an array containing all the additional arguments that were passed to the function.
*/

function myVariadicFunction(string ...$args): void{
    foreach ($args as $arg) {
        echo $arg . "\n";
    }
}
myVariadicFunction('Hello', 'world', '!');

// In this example, the myVariadicFunction() function accepts a variable number of arguments. When we call the function with three arguments ('Hello', 'world', '!'), the function prints each of those arguments on a new line.

// Variadic functions can be extremely useful in several situations. For example, they are often used in string formatting functions, where you might want to replace a variable number of placeholders in a string with values.