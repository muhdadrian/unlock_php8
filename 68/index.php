<?php

# Types of format specifiers

// The previously mentioned printf() and sprintf() functions support several format specifiers. However, here are some of the most used ones:

/*
%s: String
%d: Integer (base 10)
%b: Integer as binary (base 2)
%o: Integer as octal (base 8)
%x: Integer as hexadecimal (base 16, lower case)
%X: Integer as hexadecimal (base 16, uppercase)
%f: Floating point (decimal number)
%e: Scientific notation (lower case: e)
%E: Scientific notation (uppercase: E)
%c: Character with the ASCII value in the argument
%u: Unsigned integer (base 10)
%%: Literal percentage (%)
*/

// You can use these format specifiers to control the display of specific data types. See some examples:

printf("Binary: %b\n", 5); //Prints: Binary: 101
printf("Octal: %o\n", 17); //Prints: Octal: 21
printf("Hexadecimal: %x\n", 255); //Print: Hexadecimal: ff
printf("Floating point: %f\n", 3.141592); //Prints: Floating point: 3.141592
printf("Scientific notation: %e\n", 3000000); //Prints: Scientific notation: 3.000000e+6
printf("Character: %c\n", 65); //Print: Character: A
