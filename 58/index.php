<?php

// Another example, often used with substr() is to remove the last character from a string, for example, removing a semicolon from the end of the string or removing an exclamation point from the last used example would be:
    
    $greeting = "Hello, World!";
    $notExclamation = substr($greeting, 0,  -1);  // Remove the last character
    echo $notExclamation; //Prints "Hello, World"
    
// In this code, the -1 passed as the third argument to substr() indicates that we want to start from the end 

// In this code, the -1 passed as the third argument to substr() indicates that we want to start from the end of the string. So substr($greeting, 0, -1); will take the string from the beginning to one character before the end, effectively removing the last character.