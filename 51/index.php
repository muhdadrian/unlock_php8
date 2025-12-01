<?php

# New argument types: mixed, union types.

// PHP 8 introduced some new features that allow us to be more specific about the types of values we expect when we pass arguments to a function. In the previous chapter, we talked about union types, which allow us to declare multiple types. However, we have an argument type that can facilitate multiple declarations.

// One such feature is the mixed type, which indicates that an argument can be of any type:

    function foo(mixed $bar) : mixed {
    // ...
    }

// With the mixed type, we define both the input argument and the return of the function, which can be of any type.

