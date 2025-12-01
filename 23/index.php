<?php

# Comparison operators

// Comparison operators are used to compare two values. 

# Equals (==):

$x = 10;
$y = "10";
var_dump($x == $y); // output: bool(true)

echo '<br>';

# Identical (===):

$x = 10;
$y = "10";
var_dump($x === $y); // output: bool(false)
    
echo '<br>';

# Not equal (!=):
        
$x = 10;
$y = 20;
var_dump($x != $y); // Output: bool(true), because 10 is not equal to 20.
        
echo '<br>';

# Not identical (!==):

$x = 10;
$y = "10";
var_dump($x !== $y); // Output: bool(true), because 10 (integer) is not identical to "10" (string).
            
echo '<br>';
            
# Less than (<):
            
$x = 10;
$y = 20;
var_dump($x < $y); // Output: bool(true), because 10 is less than 20.

echo '<br>';

# Greater than (>):
            
$x = 30;
$y = 20;
var_dump($x > $y); // Output: bool(true), because 30 is greater than 20.
            
echo '<br>';

# Less than or equal to (<=)

$x = 20;
$y = 20;
var_dump($x <= $y); // Output: bool(true), because 20 is equal to 20
            
echo '<br>';

# Greater than or equal to (>=):
            
$x = 30;
$y = 20;
var_dump($x >= $y); // Output: bool(true), because 30 is greater than 20.
