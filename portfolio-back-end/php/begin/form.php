<?php 
  $name = $email = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    /*trim($data) will strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function).
    stripslashes($data) will remove backslashes () from the user input data (with the PHP stripslashes() function).
    htmlspecialchars($data) converts special characters to HTML entities.
    (If the user inputs < and >, htmlspecialchars() will translate it to &lt; and &gt;).*/
  }

echo "Welcome " . $_POST["name"] . "<br>" . "Your email addres is: " . $_POST['email'];

?>
