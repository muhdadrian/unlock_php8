<?php

// As mentioned, another new resource we have is the union, which allows specifying that an argument can be one of several different types, for example:
    
    function combine(int|string $val1, int|string $val2) : int|string {
        return $val1 . $val2;
    }
    echo combine('Hello, ', 'world!');  // output 'Hello, world!'
    echo combine(1, 2);  // output '12'
    
// Note that the combine function is not adding, but rather concatenating the two values, whether integers or strings. These features make your code more secure and self-documenting, since anyone reading the code can easily understand what types of values a function expects.
    
    