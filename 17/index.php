<?php

# Predefined variables

// PHP provides many predefined variables, which are variables already defined for you. They can be very useful for getting information about the runtime environment, the state of PHP or the user. Some commonly used examples include $_GET, $_POST, $_SERVER, $_COOKIE, $_SESSION, and as mentioned many others.

// For example, the super global variable $_SERVER is an array that contains information about headers, paths, and script locations.

echo $_SERVER['PHP_SELF']; //myfile.php
echo "<br>";
echo $_SERVER['SERVER_NAME']; //localhost
echo "<br>";
echo $_SERVER['REQUEST_METHOD']; //GET
echo "<br>";
echo $_SERVER['HTTP_HOST']; //localhost
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //Mozilla/5.0 (Windows NT ....)
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; //myfile.php

// This will print the file name of the running script, the host name, the method used to access the file, the host header in the current HTTP request, the user agent of the user and the current script path respectively.