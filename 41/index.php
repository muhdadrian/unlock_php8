<?php

// we can use one of the PHP resources called 'include' or 'require' that imports the file. 
// both statements basically take all the text/code that exists in the specified file and copy it into the file using the statement.

include 'functions.php';

echo sumInteger(1, 2) . '<br>';  // Outputs: 3
echo subInteger(5, 3);  // Outputs: 2

/*
The difference between include and require appears when the file to be imported is not found:

1) include: Will issue a warning but the script will continue to run.

2) require: Will throw a fatal error and stop script execution.
*/