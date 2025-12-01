<?php

 // The do-while loop is like the while loop, but the condition check is done at the end of the loop. This means that the block of code will be executed at least once, regardless of the condition. An example of its use is as follows:

$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);

// In this example, the variable $i is initialized to 0 before the loop. The code block is executed first and then the condition $i < 5 is checked. If the condition is true, the loop continues. Otherwise, the loop is terminated.

// In addition to these three main loops, there are other more advanced looping structures, such as the foreach loop, which is widely used for traversing arrays and objects. We will discuss these structures in future chapters of the book. For now, it is important to understand the three main loops and their application to create efficient, controlled iterations in your code.