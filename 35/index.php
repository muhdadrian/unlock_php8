<?php

# Functions and procedures

// Functions and procedures are reusable blocks of code that can be called to perform a specific task. Next, we will better understand the use of each one.

# Functions

// Functions are reusable blocks of code that perform a specific task. A function is defined with the keyword function, followed by a unique name for the function, a list of parameters in parentheses, and a block of code in braces. Once defined, a function can be called from anywhere in your script using its name followed by a list of arguments in parentheses.

function showMessage(string $name): string {
    return "Hello, {$name}!";
}
echo showMessage("Roni Sommerfeld"); //outputs: Hello, Roni Sommerfeld!

// This example demonstrates that we could use the showMessage function in different parts of a system, whenever we want to show a welcome message to the user. This facilitates and optimizes our code and makes it less repetitive.