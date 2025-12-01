<?php

# Named arguments: Allows you to specify arguments by name instead of by order, which can increase code readability:

function describeAnimal(string $name, string $type) {
     return "$name is a $type.";
}
echo describeAnimal(type: "cat", name: "meow");  // output: "meow is a cat.

// In this example, the simplicity of invoking a function without worrying about the order makes development much more fluid and simpler.