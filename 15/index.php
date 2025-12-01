<?php

# Global and local variables

// In PHP, we can distinguish between global and local variables based on their scope. The scope of a variable determines where it can be accessed and used in a script.

// Global variables are declared outside of any function and are accessible throughout the PHP script. This means they can be used anywhere, inside or outside functions. Global variables are useful when you need to share data between multiple parts of your script. 

$globalVar = "I'm global!";  // A global variable

function variableTest() {
    global $globalVar;
    $localVar = "I'm local!";  // A local variable
    echo $globalVar;
    echo '<br>';
    echo $localVar;
}
variableTest();
//outputs:
//I'm global!
//I'm local!

/*
In this example, $globalVar is a global variable as it is declared outside the variableTest() function. Inside the function, we use the global keyword to access this global variable. 

The variable $localVar is a local variable, as it is declared inside the function and can only be accessed inside it.

When we call the variableTest() function, it prints the values of global and local variables. The result is the impression of I'm global! and I'm local!. 
*/

/*
It is important to be careful when using global variables, as they can be accessed and modified anywhere in your code, which can make bug tracking difficult and make the code less readable and modular. 

It is good practice to limit the use of global variables and, whenever possible, opt for local variables, which are restricted in scope to a specific function.
*/

