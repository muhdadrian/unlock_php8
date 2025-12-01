<?php

// Arrow functions are often used mainly when working with arrays, a more practical example:

$numbers = [1, 2, 3, 4, 5];
$odds = array_filter($numbers, fn($number) => $number % 2 == 1);
print_r($odds);  // Output: [1, 3, 5]

// In this example, the function arrow fn($number) => $number % 2 == 1 is passed to the array_filter. This function is applied to each element of the $numbers array, and the result is a new array containing only the odd numbers.

// These examples illustrate how arrow functions can be used to simplify code and increase readability when working with arrays and mapping or filtering operations.
