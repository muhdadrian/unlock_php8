<?php

# Logical operators

# Operator and (&&):

// The operator and (&&) returns true if both operands (conditions) are true. For example:
        
$x = 10;
$y = 20;
var_dump($x == 10 && $y == 20); // Output: bool(true), because both conditions are true.

echo '<br>';

# Operator or (||):

//The operator or (||) returns true if at least one of the operands (conditions) is true. For example:
    
$x = 30;
$y = 20;
var_dump($x == 10 || $y == 20); // Output: bool(true), because one of the conditions is true.
    
echo '<br>';

# XOR operator:

// The xor operator returns true if exactly one of the operands (conditions) is true, but not both:
    
$x = 10;
$y = 20;
var_dump($x == 10 xor $y == 10); // Output: bool(true), because only one of the conditions is true.
    
echo '<br>';
# NOT operator (!):

// The not operator (!) inverts the logical value of the operand. If the condition is true, not will make it false and vice versa:

$x = 10;
$y = 20;
var_dump(!($x == 10 and $y == 20)); // Output: bool(false), because both conditions are true, but negated by !

/*
These logical operators help you create more complex and robust conditions in your PHP code, allowing you to more effectively control the flow of execution.
*/