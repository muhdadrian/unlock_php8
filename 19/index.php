<?php

/*
$_GET is a super global variable in PHP, used to collect data submitted by an HTML form via the GET method. Like $_POST, $_GET is also an associative array that contains form data. However, unlike $_POST, the data sent via the GET method is appended to the HTTP request URL and is visible in the browser. This can be useful for things like tagging pages with certain parameters in the URL, but it also means you should not use GET to send sensitive data like passwords.

Another important difference between GET and POST is that GET has a limit on the size of data that can be sent. While this limit is quite large, it can be a problem if you are trying to send a large amount of data, such as a file.
*/

//Here is an example of how you can use $_GET to access data submitted by a form:

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    echo "Hello, $name!";
}
?>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<!-- 
This example is the same as the previous example when we use it in $_POST, the difference is that the value of the variable name used in the form will be exposed in the URL of your browser, in addition, instead of using $_POST to capture the form data we use the $_GET.
-->