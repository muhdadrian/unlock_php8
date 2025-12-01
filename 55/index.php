<?php

# Arrow functions

// PHP version 7.4 has introduced arrow functions, which is a shorter syntax for anonymous functions. 

// Arrow functions also automatically capture variables from the parent scope, making using closures easier and cleaner. Here is an example:

$factor = 10;
$multiply = fn($number) => $number * $factor;
echo $multiply(5);  // output 50

// In this example, creating anonymous functions has been simplified and made using closures easier and cleaner.

// The arrow function is defined with the fn keyword, followed by the parameters in parentheses ($number) and the body of the function after the => operator.

// In this case, the $multiply function takes a single argument, $number, and returns the product of $number and $factor. The $factor variable is not a parameter of the function, but a variable of the parent scope (that is, the environment where the arrow function was defined).


