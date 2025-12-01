<?php

# Attributes: Allows you to add metadata to classes, methods, functions, properties, parameters, and class constants. This opens a whole new field of possibilities for the language, allowing developers to annotate their code in a more standardized way:

# [Description("This function returns the description of an animal.")]
function describeAnimal(string $name, string $type) {
    return "$name is a $type.";
}

// Description is an attribute being applied to the describeAnimal function. The Description attribute can be used, for example, to provide a human-readable description of a function that can be retrieved and used in other parts of the code (for example, to automatically generate documentation, for code analysis, and so on.).

/*
Developer note:

Attributes in PHP 8 are not designed to completely replace comments, but they offer a new way to add metadata to your code in a more structured way.

Comments and code documentation are still extremely useful for providing detailed information about what a class, function, or method does, how it should be used, and what kind of parameters it accepts or returns.

Attributes, on the other hand, can be used to add structured information to your code that can be read and used by other parts of your code at runtime. For example, as we talked about in the previous chapter, you can use attributes to define routing in your web application, to markup unit tests or to define which fields in a class should be serialized when transforming the object into JSON.

Therefore, while attributes can replace some uses of comments (especially comments that were used to add metadata that is used by your code), they are not a complete replacement for comments and code documentation.
*/