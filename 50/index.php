<?php

# Argument by reference

// In some cases, you might want a function to be able to modify the original value of the variable. This is called passing by reference and can be done in PHP by prefixing the function argument with &. Using the previous example, we would have the following situation:

function addOne(int &$num): int
{
    $num = $num + 1;
    return $num;
}
$originalNum = 5;
$newNum = addOne($originalNum);
echo $originalNum; // output: 6
echo $newNum; // output: 6

/*
when passing arguments by reference, modifications made to arguments within the function directly affect the original values. 

This is helpful in some cases but should be used with care as it can lead to unexpected side effects. 

By changing the value of an argument, you may be changing the state of another part of your program.

@ Which type of argument to use, by value or by reference?

Both methods have their uses and may be appropriate depending on what you are trying to achieve with your code. 

Passing by value is safer as it avoids unwanted side effects, but passing by reference can be useful when you need to modify the original value or when you are dealing with large amounts of data that would be inefficient to copy.
*/
