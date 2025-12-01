<?php

# Variable types

// In recent versions of PHP, the ability to type class properties and function parameters has been introduced. This functionality allows declaring the type of variable that belongs to a class or is expected as an argument in a function. 

// This approach helps ensure that the variable is always of the expected type, preventing type errors.
// For example, in a class called Author, we can declare the type of properties as follows:

class Author {
    public int $id;
    public string $name;
}

$user = new Author();
echo $user->id = 1;
echo '<br>';
echo $user->name = "Roni Sommerfeld";

// In this example, the Author class has two properties: $id of type int (integer) and $name of type string (text). By creating an instance of the Author class, we can assign values to its properties according to the specified types.

// Importantly, variable typing is a more advanced feature related to Object-Oriented Programming (OOP). While we have briefly mentioned the concept here, we will cover these features in more detail in future chapters.

// The introduction of variable typing in PHP has brought significant benefits to software development, helping to improve code security and reliability. In later chapters, we will explore these features in more depth and discuss how to use them efficiently in our projects.