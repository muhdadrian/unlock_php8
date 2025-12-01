<?php

# String comparison

// The strcmp() function in PHP is used to compare two strings. It returns an integer that is:

// Less than zero if the first string is less than the second string (that is, appears before alphabetically).

// Zero if the two strings are equal.

// Greater than zero if the first string is greater than the second string (that is, it appears later in alphabetical order).

// Example and usage of strcmp():

echo strcmp('Hello', 'hello'); //Returns a negative number

// An important detail is that strcmp() is case sensitive, which means that it considers uppercase and lowercase letters to be different. This follows the rules of the ASCII table, where uppercase letters have lower values than lowercase letters.