<!DOCTYPE html>
<html lang="en">


	<head>

		<meta charset="utf-8"/>
		<title>Your form</title>
		<link rel="stylesheet" href="css/styles.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Righteous|Vollkorn&display=swap" rel="stylesheet">
    <style>
      * {
        font-family: 'Righteous', cursive;
        font-family: 'Vollkorn', serif;
        text-align: center;
        font-size: 20px;
        color: #EDD7FE;
      }
    </style>

	</head>

	<body>
  
<?php 

$name = $email = $age = $role = $recommend = $improve = $comment = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["complete-name"]);
    $email = test_input($_POST["email"]);
    $age = test_input($_POST["age"]);
    $role = test_input($_POST["option-current-role"]);
    $recommend = test_input($_POST["recommend"]);
    $improve = test_input($_POST["improve"]);
    $comment = test_input($_POST["comment"]);
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

echo "Welcome " . $_POST["complete-name"] . "<br>" . "Your email addres is: " . $_POST['email'] . "<br>" . "Your age is " . $_POST["age"] . "<br>" . "Your current role is " . $_POST["option-current-role"] . "<br>" . "About reccomend freeCodeCamp, you said " . $_POST["recommend"] . "<br>" . "You said that we need to improve " . $_POST["improve"] . "<br>" . "You like our " . $_POST["checkbox"] . "<br>" . "Thanks a lot because you write in the comments that " . $_POST["comment"];
?>

  </body>