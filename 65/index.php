<?php

# Position search in strings

// The strpos() function is used to find the position of the first occurrence of a substring in a string. The position is zero-based, which means the first character in the string is 0, the second is 1, and so on. If the substring is not found, it returns FALSE. Let us see an example:

echo strpos('Hello World!', 'World'); //returns 6

// In the example above, as we are looking for the word World, and it was found in the string, the function returns the position of the first character of World, which is 6. Remembering that the count always starts at 0.