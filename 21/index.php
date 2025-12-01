<?php

/*
$_SESSION is a super global variable in PHP that is used to store session information. A session is a way to store information (in variables) to be used across multiple pages. Unlike a cookie, the information is not stored on the userʼs computer, but on the server. The session is started with the session_start() function, and the session data is stored in an associative array.

Sessions are useful for maintaining application state between different HTTP requests. For example, they can be used to track a userʼs login so that the user can navigate between different pages on the site without having to log in again on each page.
*/

//Start the session
session_start();
//Define session variables
$_SESSION["username"] = "RoniSommerfeld";
$_SESSION["email"] = "roni@4tech.mobi";
//Access session variables
echo "Welcome " . $_SESSION["username"] . ". Your email is " . $_SESSION["email"] . ".";

/*
In this example, we are using the session_start() function to start a new session or resume an existing session. Next, we define two session variables, username and email, using the $_SESSION array. Finally, we access the session variables and display them on the page.

Session variables are stored on the server until the session is explicitly terminated with session_destroy(), or until the session times out, which typically occurs when the user closes the browser or after a period of inactivity.
*/