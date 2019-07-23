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
function thisIsALoopInsideAFunction() {
for ($x = 5; $x <= 10; $x++) {
    echo "<p>This is a for loop, and the number is: $x </p>";
};
} thisIsALoopInsideAFunction();

function iPutThisInsideTheFunctionJustToLetTheArrayHere() {
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "The color <b>$value</b> is displayed here using a foreach.<br>";
};
} iPutThisInsideTheFunctionJustToLetTheArrayHere();

echo "<p></p>";

function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", 1983);

echo "<p></p>";

$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

echo '<p><form action="form.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit"></p>';

?>

</body>
</html>
