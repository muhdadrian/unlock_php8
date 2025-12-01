<?php
/*
$_COOKIE is a super global variable in PHP that is used to access cookie data. Cookies are small data files that are sent by the server and stored in the userʼs browser. They are mainly used to maintain the application state between different HTTP requests. For example, they can be used to remember whether a user is logged in, to store user preferences, or to track user behavior for analysis purposes.

Each cookie has a name and a value, and you can access a cookieʼs value in PHP using $_COOKIE["cookie_name"]. Cookies also have an expiration date, after which they are automatically deleted. If you do not set an expiration date when creating a cookie, it will be deleted when the user closes the browser.
*/

// Here is an example of how you can create a cookie and access its value in PHP:

$cookie_name = "user_auth";
$cookie_value = "Roni Sommerfeld";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
// "/" - The path parameter that makes the cookie available across the entire domain

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }

/*
In this example, we are using the setcookie function to create a cookie called user_auth with the value Roni Sommerfeld. The cookie is set to expire in 30 days. We then check to see if the cookie is set using isset($_COOKIE[$cookie_name]). If set, we display the name and value of the cookie.
*/

/*
FROM claude.ai:

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

setcookie() is a PHP function used to send a cookie to the client's browser
$cookie_name - The name of the cookie (variable containing a string)
$cookie_value - The value to store in the cookie
time() + (86400 * 30) - Sets the expiration time:

time() returns the current Unix timestamp (seconds since Jan 1, 1970)
86400 is the number of seconds in a day (24×60×60)
* 30 multiplies this by 30 days
The cookie will expire 30 days from when it's set


"/" - The path parameter that makes the cookie available across the entire domain

For example, if $cookie_name is "user_preference" and $cookie_value is "dark_mode", this would create a cookie that:

Is named "user_preference"
Contains the value "dark_mode"
Will expire in 30 days
Is available on all pages of the website

This cookie would then be accessible in future page loads through $_COOKIE["user_preference"].

*/