<?php

# New features: Named arguments, union types, attributes

// Named arguments

// Named arguments are a new feature introduced in PHP 8 that significantly improves code readability and robustness. This functionality allows developers to pass values to a function based on the name of the parameters instead of their order. This is especially useful in functions that have many parameters or parameters with default values.

// Named arguments can make code more self-explanatory, as the parameter name provides clear context for the value being passed. In addition, they can reduce the risk of errors caused by incorrect argument order, as values are associated with parameters by name rather than position.

// In previous versions of PHP, when you called a function, you had to supply arguments in the order in which the parameters were defined. This could be problematic, especially in functions with many parameters or parameters with default values, as it was easy to confuse the order of arguments or forget the purpose of each.

// With named arguments, you can specify a parameterʼs value by name, regardless of its position in the parameter list. Not only does this make the code more readable, it also allows you to ignore parameters with default values that you donʼt want to change.

# Practical examples

// Let us consider a function that has many parameters, for this example let us imagine that our code makes coffee (a developerʼs most important drink). Based on this, some of these parameters will have default values, in this format:

    function makeCoffee(string $type = "cappuccino", int $sugar = 0, bool $milk = true) {
        //TODO:  
    }

// Before PHP 8, if you wanted to make a coffee without milk, you had to pass all the arguments, even if you wanted to use the default values for the other parameters:
        
    makeCoffee("cappuccino", 0, false);

// With PHP 8ʼs named arguments, you can pass only the arguments you want to change, for example if you do not want milk in your coffee your function execution would look like:
        
    makeCoffee(milk: false);

// In this example, we are calling the makeCoffee function with named arguments. Note that the order of arguments in the function call does not match the order of parameters in the function definition. In the example of the function, we are passing only the parameter that the milk is false. This demonstrates the flexibility that named arguments bring to calling functions in PHP 8.

// Why was the $ symbol not used in the word milk when calling the makeCoffe function?

// The $ symbol is only used to denote variables in PHP, but when we are using named arguments, we are referring to the parameter name, not a variable. Therefore, in the example cited above, $ is not used before the word milk.