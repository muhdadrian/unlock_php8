<?php

# Closures

// Closures in PHP are like packages that capture variables from the context where they were created, to use them later, even if that original context has already disappeared. This lets you remember or preserve a state.

// Imagine that you have a box (which is the closure) where you can store things (the variables). Even if you leave the house (the original context), you can still open the box and see the things you have stored there. So even if the original context no longer exists, the closure still has access to the variables that were captured.

// Let us look at the counter example:

function counter(): Closure  {
    $count = 0;
    return function() use (&$count) {
        return ++$count;
    };
}
$counter = counter();
echo $counter();  // output 1
echo $counter();  // output 2
echo $counter();  // output 3

/*
In this example, counter is a function that creates and returns a closure. The $count variable is initialized to 0 inside the counter.

The closure is the anonymous function function() use (&$count) { return ++$count; }. She has access to the $count variable thanks to use (&$count). This is what we call capturing the $count variable. The & means we are capturing the variable by reference, so when we modify it inside the closure, we are modifying the original, not a copy.

When we call $counter(), the closure runs and increments the value of $count. Since the closure remembers the state of the $count variable thanks to use(&$count), each time we call $counter(), $count increments. Even though the counter function has already terminated, and its context is gone, the closure still has access to the value of $count thanks to the capture.
*/

/*
Developer note:

Context variables, in the sense discussed earlier, refer to variables that are available within the context or scope where a function, closure, or other code routine is executing.

For simplicityʼs sake, let us understand what a context or scope is first. In the programming world, the scope of a variable refers to the part of code where the variable can be accessed or changed. For example, a variable defined inside a function can only be accessed inside that function - this is called local scope. A variable defined outside of all functions, on the other hand, can be accessed anywhere in the script - this is called global scope.

Now, when we talk about context variables, we are referring to variables that are available for use within the current scope. For example, if you are inside a function and you have defined some variables inside that function, these will be your context variables.

Closures in PHP can capture these context variables the moment they are defined, so that they can continue to use them even after the original context (such as the function where the closure was defined) no longer exists.
*/