<?php

#String formatting

// Formatting strings is an essential part of PHP programming as it allows you to present data in a readable and useful way.

# printf()

// This function is used to print a formatted string. It returns the number of characters in the final string. You can use different format specifiers to format numbers, strings, characters, and other types of data:

$name = "Roni";
$age = 34;
printf("Hello, %s. You are %d years old.\n", $name, $age); //Prints: Hello Roni. Are you 34 years old.

// In this example, %s and %d are format specifiers, where %s is used for strings and %d is used for integers.
