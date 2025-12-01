<?php

# Anonymous functions, closures, and arrow functions

// we will explore anonymous functions, closures, and arrow functions. These are three powerful and flexible PHP concepts that will allow you to write much more robust code.

# Anonymous functions

// Anonymous functions, as the name implies, are functions without a specified name. They are useful when you need a simple, single-use function that you will not need to reuse elsewhere.

// In PHP, an anonymous function can be assigned to a variable and then called through that variable. See an example:

$sayHello = function($name) {
    return "Hello, $name";
};

echo $sayHello("Roni");  // output: "Hello, Roni"

// Note that the $sayHello variable has become an anonymous function. That is why it is assigned to the variable and will have its usage lifecycle only in the specific code block.