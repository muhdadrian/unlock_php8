<?php

# Procedures

// In PHP, a procedure is simply a function that does not include a return statement. When developing a system, there are situations where we need to perform calculations or actions that are repetitive in different parts of the system. In order not to create redundant codes, we create a function that performs only one procedure without a return.

// In this example below, the rectangleArea function is a procedure that takes the length and width of a rectangle as arguments, calculates the area of the rectangle by multiplying the length by the width, and then prints the result:

function rectangleArea(float $length, float $width): void {
    $area = $length * $width;
    echo "The area of the rectangle is: $area";
}
rectangleArea(5.5, 3.2);

// Note that the return type is void, which means that this function does not return a value. When you call rectangleArea(5.5, 3.2), it calculates and prints the area of the rectangle, but it does not return any value that can be assigned to a variable or used in an expression. This example printed a message, but in a real case scenario, we could process the data and save it in the database or something like that.