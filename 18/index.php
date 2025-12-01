<?php

// $_POST is a super global variable in PHP, used to collect data submitted by an HTML form via the POST method. When a form is submitted using the POST method, the form data is sent in the body of the HTTP request, making it invisible in the browserʼs URL. Furthermore, POST has no limitation on the size of data to be sent, making it suitable for sending large amounts of data.

// The data sent through the POST method is accessible in PHP through the super global variable $_POST, which is an associative array. The array keys are the form field names, and the array values are the data entered into those fields.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Hello, $name!";
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

<!-- 
In this example, we are using two super global variables: $_SERVER and $_POST. The $_SERVER variable is an array that contains information about the server and the current request. We are using $_SERVER["REQUEST_METHOD"] to check that the request method is POST, and $_SERVER['PHP_SELF'] to specify that the form should be submitted to the same page that contains it.

If the request method is POST, the code inside the if block will be executed. This code accesses the formʼs name field value via $_POST["name"] and displays it on the page.
-->

<!-- 
Developer note: As stated earlier, PHP is a server-side programming language. This means that the PHP code runs on the web server, not the userʼs browser. When a user requests a page that contains PHP code, the server processes the PHP code and generates HTML. This HTML is then sent back to the userʼs browser to be displayed.
-->

<!-- 
In the example we used, the PHP code checks that the request method is POST. If so, it reads the value of the formʼs name field from the $_POST super global variable and displays it. This happens on the server before any HTML is sent to the browser.
The HTML form itself is submitted to the browser as-is. When the user fills in the form and clicks the submit button, the form data is sent back to the server using the POST method. The server then executes the PHP code again, this time with the form data available in the $_POST variable.
Therefore, the PHP code itself is never sent to the browser and is not visible in the source code of the HTML page. All the browser receives is the result of the server processing the PHP code, which in this case is the formʼs HTML (and possibly a greeting message, if the form was submitted).
-->