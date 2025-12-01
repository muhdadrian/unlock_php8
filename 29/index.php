<?php

# Switch

// The switch statement is used to select one of many blocks of code to be executed. With the use of switch we will have the following example:

$weather = "sunny";
//Using switch
switch($weather) {
    case "sunny":
        echo "Let's go to the beach!";
        break;
    case "rainy":
        echo "Let's stay home.";
        break;
    //if no previous condition meets
    default:
        echo "Let's see what the day brings.";
        break;
}

/*
With the switch structure, we check the value of the $weather variable in different cases. If the value is sunny, we display the message Let's go to the beach!. If it is rainy (rainy), we display the message Let's stay home.. If none of the previous conditions are met, we use the default clause to display the message Let's see what the day has in store for us.
*/

/*
Importantly, with the latest PHP 8 updates, new features such as the introduction of the match expression allow for more optimized and concise code writing, resulting in better readability and efficiency. As we progress through the book, weʼll explore these new possibilities and improvements to control structures so you can take full advantage of the capabilities of PHP 8.
*/