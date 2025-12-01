<?php

# Arguments by value and by reference

// In programming languages, there are two fundamental ways to pass arguments to a function: by value and by reference. The key difference between the two is that passing by value creates a copy of the value in memory for the function to use, while passing by reference passes the actual memory address of the value, allowing the function to modify the original value.

// In PHP, as in many other programming languages, the default is to pass arguments by value. This means that when you pass a variable to a function, PHP creates a copy of that variableʼs value for the function to use. If the function modifies the value, the original variable will not be affected. For example:

    function addOne(int $num): int
    {
        $num = $num + 1;
        return $num;
    }
    $originalNum = 5;
    $newNum = addOne($originalNum);
    echo $originalNum; // output: 5
    echo $newNum; // output: 6

// In the example above, we define a function called addOne() that takes a $num argument. Inside the function, we add 1 to the value of $num and return the result.

// When we call the addOne() function and pass $originalNum as an argument, the value of $originalNum is copied to $num. That is, the function is working with a copy of the original value, not the original value itself.

// This is illustrated when we print the values of $originalNum and $newNum after calling the function. Even though the addOne() function added 1 to the value of $num, the value of $originalNum did not change, as the function was working with a copy. The value returned by the addOne function is stored in $newNum, so $newNum equals 6, but $originalNum is still 5.

// In summary, when arguments are passed by value, changes made to arguments within the function do not affect the original values. This is the standard way of passing arguments in PHP and many other programming languages, as it helps avoid unexpected side effects: the function is given its own set of values to work with, and what it does with those values does not affect the rest of the program.