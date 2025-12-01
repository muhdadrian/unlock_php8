<?php

# Count number of bytes in a string

// The strlen() function is one of PHPʼs most common string functions. It is used to get the length of a string, that is, the number of bytes in a string.

// In PHP, a string is a sequence of characters. Each character in a string is considered a byte. Therefore, strlen() returns the number of bytes in a string, which is the number of characters for strings consisting of ASCII characters only.

// Note that strlen() counts bytes, not characters. This means that if the string contains multibyte characters (that is, characters consisting of more than one byte), the result of strlen() might not be what you expect. 

// To get the length of a string in terms of characters, not bytes, you should use the mb_strlen() function, providing the appropriate character encoding. We will talk about using mb_ in the later sections.

// Here is an example of using strlen():

$text = "Hello, PHP!";
$length = strlen($text);
echo $length;  // output: 12

// In this example, the $text variable contains the string Hello, PHP!. The strlen() function is used to get the length of this string, which is then stored in the $length variable. Finally, the value of $length is printed, which is 12, corresponding to the number of characters in the string.