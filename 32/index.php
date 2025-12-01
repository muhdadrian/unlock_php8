<?php

# Loop structures

// The for loop is used when you know exactly how many times you want the block of code to run. It consists of three parts: the initialization, the continuation condition and the update. See the example:
    
    for ($i = 0; $i < 5; $i++) {
        echo $i;
    }

/*
In this example, the variable $i is initialized to 0. The loop continues as long as the condition $i < 5 is true. At each iteration of the loop, the value of $i is incremented by 1.
*/