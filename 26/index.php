<?php

# Concatenation operators

// Concatenation is an important concept in PHP, which aims to join two or more strings together.
// The concatenation operator in PHP is the dot (.). You can use this operator to join two or more strings together. Here is a basic example:

$greeting = "Hello, ";
$name = "World!";
$completeGreeting = $greeting . $name; // This will output "Hello, World!"
echo $completeGreeting;

echo '<br>';

// There is also the assignment concatenation operator (.=), which appends one string to the end of another. Here is an example:

$greeting = "Hello, ";
$greeting .= "World!"; // This will also output "Hello, World!"
echo $greeting;


echo '<br>';

// PHP also supports string interpolation, which means you can include variables directly inside a string if it is enclosed in double quotes. Here is an example:

$name = "World";
echo "Hello, $name!"; // This will output "Hello, World!"

// Remember that this does not work with single quotes. If you try the example above with single quotes, it will print the variable name, not its value.