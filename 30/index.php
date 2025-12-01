<?php

# Ternary operator and Null coalescing operator (??)

// The ternary operator is a concise way to write an if-else statement. The Null coalescing operator (??) is used to check whether a variable is null. If it is, it returns the value of the operand on the right, otherwise it returns the value of the variable.

$weather = "sunny";
//Using the ternary operator
echo $weather == "sunny" ? "Let's go to the beach!" : "Let's stay at home.";
//Assume that $weather may not be set
$weather = $weather ?? "unknown";

/*
In this example, the code checks if the variable $weather equals sunny. If true, the expression Let's go to the beach! will be displayed; otherwise, the expression Let's stay home. will be displayed. Using the ternary operator allows you to express the same condition more concisely, making the code more 
readable, especially in complex and extensive systems.

Another cool feature is the Null coalescing operator (??). It is used to check whether a variable is null and, if so, returns an alternative value. In the previous example, we assumed that the $weather variable might not be defined. We can use the Null coalescing operator to assign an alternative value to the variable if it is null.
*/