<?php

// In recent PHP updates, variadic functions have been improved to allow specifying types. This means that you can now force all arguments passed to a variadic function to be of a certain type.

function myVariadicFunction(string ...$args): void{
    foreach ($args as $arg) {
        echo $arg . "\n";
    }
}

myVariadicFunction('Hello', 'world', '!');

// If you look at the example, we are saying that $args is of type string, that is, when we invoke the myVariadicFunction function, the arguments must be a string. If it is a value other than a string, we will have an undefined type error.

// Developer note:

// The variadic arguments used in the function will always be an array, therefore, the definition we make of the argument is for the type of value it will have and not the type of the argument itself, that way when we define string …$args we are saying that the values of the array that is $args will be of type string.