<?php

# Operators and expressions

/*
Operations are fundamental in any programming language, and PHP is no exception. Operators are special symbols that represent computations such as addition, multiplication, comparison, and so on. 

When operators are used with one or more values (or variables), they form an expression. In PHP, expressions are anything that has a value.
*/

# Addition (+):
$x = 10;
$y = 20;
echo $x + $y; // output: 30

echo '<br>';

#Subtraction (-):
$x = 30;
$y = 10;
echo $x - $y; // output: 20

echo '<br>';

# Multiplication (*):
$x = 5;
$y = 6;
echo $x * $y; // Output: 30

echo '<br>';

# Division (/):
$x = 30;
$y = 5;
echo $x / $y; // Output: 6

echo '<br>';

# Modulus (%):
// The modulus operator (%) returns the remainder of dividing one number by another. This operator is very useful when we want to know if a number is divisible by another, for example. If the modulus result is 0, it indicates that the number is perfectly divisible.

$x = 10;
$y = 2;
echo $x % $y; // Output: 0, indicating that 10 is perfectly divisible by 2.

echo '<br>';
# Exponentiation (**):
// The exponentiation operator (**) is used to raise one number to the power of another. In the example below, the number 2 is raised to the third power, resulting in 8:

$x = 2;
$y = 3;
echo $x ** $y; // Output: 8, because 2 cubed is 8.