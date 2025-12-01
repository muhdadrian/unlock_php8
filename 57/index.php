<?php

# Native functions in PHP

# String manipulation

# Cut part of a string

// The substr() function is used to cut part of a string, where we need to reduce a part of the string, for example:

$greeting = "Hello, World!";
// cutting strings
$partial = substr($greeting, 0, 5); // "Hello”
echo $partial;

// The first argument to substr() is the string we want to cut. The second argument is the index where we want to start cutting. PHP starts counting indexes from 0, so index 0 is the first character of the string. The third optional argument, which we are using here, would be the index where we want to stop cutting. In our case, we are starting at index 0 and getting the next 5 characters, so we get Hello. This result is stored in the $partial variable.


