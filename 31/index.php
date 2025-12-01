<?php

# Match expression

// PHP 8 introduced the match expression, a powerful and concise addition to the language. The match expression is an improved version of the switch, bringing some advantages in terms of readability and functionality.

$weather = "sunny";
echo match($weather) {
    "sunny" => "Let's go to the beach!",
    "rainy" => "Let's stay home.",
    default => "Let's see what the day brings.",
};

/*
The match expression runs from top to bottom, and as soon as a matching value is found, the matching result is returned. It is not necessary to use the break statement after each branch, as with the conventional switch.

Furthermore, the match expression uses strict equality (===) for comparison, which means that it compares not only the values, but also the types of variables.

Unlike the switch, the match expression can also be used as an expression itself, which means you can assign its result to a variable or use it as part of a larger expression.
*/