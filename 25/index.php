<?php

# Developer note

// Instead of && or ||, it is possible to use the words and/or.
// For example, the use of and (&&) can be shown in the following way:
$x = 10;
$y = 20;
var_dump($x == 10 and $y == 20); // Output: bool(true), because both conditions are true.

echo '<br>';

# The use of or (||) is as follows:

$x = 30;
$y = 20;
var_dump($x == 10 or $y == 20); // Output: bool(true), because one of the conditions is true.

/*
However, the use of the words and/or has a lower operator precedence than the operators (&&) and (||). This means that in some circumstances, using and/or can lead to unexpected behavior if you are not aware of their precedence rules.

Let us explain operator precedence with an analogy.

Think of operator precedence like the rules of a football game. Some players (operators) have the priority to play the ball (perform an operation) before others. Similarly, in mathematics, we have the BODMAS/PEDMAS rule that determines the order in which operations must be performed.
*/

/*
In PHP, as in many other programming languages, some operators have a higher priority than others. This means that they will be executed before other operators in the same expression.

The operators && and || have a higher priority than and/or. This means that, in an expression that uses both types of operators, the operations with && and || will be done first.

For example, consider the expression false && true or true. Here, the false && true operation is done first because of the higher priority of &&, resulting in false. Then the expression becomes false or true, which evaluates to true.

If we had used and instead of &&, as in false and true || true, the expression true || true would be done first because of the higher priority of ||, resulting in true. The expression then becomes false and true, which evaluates to false.

This difference can be confusing, so itʼs important to understand the precedence rules when using different operators in the same expression. As a good practice, you can use parentheses to clarify the order of operations and avoid confusion.
*/