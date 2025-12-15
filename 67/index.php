<?php

// sprintf()

// This function is similar to printf(), but instead of printing the formatted string, it returns the formatted string. This is useful when you want to store the result in a variable, for example:

$name = "Roni";
$age = 34;
$phrase = sprintf("Hello, %s. You are %d years old.\n", $name, $age);
echo $phrase; //Prints: Hello Roni. Are you 34 years old.

// In this example, unlike printf which prints the value immediately, sprintf allows us to save the updated value in a variable and use it later.
