<?php

// To reuse functions, we first need to define the function somewhere in our code. For example, we might have a file called functions.php with a bunch of functions defined in it:

function sumInteger(int $num1, int $num2): int {
    return $num1 + $num2;
}

function subInteger(int $num1, int $num2): int {
    return $num1 - $num2;
}

/*
In this example, we have a functions.php file that has two functions, we could invoke the functions in the file itself, however, supposing in a real project, we can use the functions.php file within other PHP files, for example, imagining that we could have a file called index.php, where this file displays calculation values.
*/