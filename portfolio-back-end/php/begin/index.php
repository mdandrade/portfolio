<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$txt = "Var text.";

echo "My first PHP script!, to start a server, we need say php -S localhost:8080.";

echo "<br>$txt";


echo "<br><br>";
$t = date("H");

$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
// This is a single-line comment

# This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>



</body>
</html>
