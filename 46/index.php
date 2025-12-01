<?php

# Nullable types 

// In the last versions of PHP, nullable types was introduced, allowing you to indicate that a functionʼs return value or parameter value can be of a certain type or null. You can do this by placing a (?) before the type of name.

function getSquare(?int $number): ?int {
    if ($number === null) {
        return null; //try return 1
    } else {
        return $number ** 2;
    }
}
echo getSquare(4);    // 16
echo getSquare(null); // nothing is printed

/*
the getSquare() function accepts an integer or null as an argument and returns an integer or null. If null is passed to the function, it will also return null. Otherwise, it returns the square of the number.
*/