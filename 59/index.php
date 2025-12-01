<?php

# Replace part of a string

// Another situation is the need to change a word or value in a string. For example, imagine that we need to change the word World from the last example to the name of PHP. For this type of situation we can use str_replace():

$greeting = "Hello, World!";
// Replacing in strings
$newGreeting = str_replace("World", "PHP", $greeting); // "Hello, PHP”

echo $newGreeting;

// The str_replace() function needs 3 parameters, the first is the word we want to change, the second the new word that will be replaced and the third is the variable or value that has the string that will be used to replace, this change we save in the $newGreeting variable, which is the result would be Hello, PHP!