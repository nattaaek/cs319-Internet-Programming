<!DOCTYPE html>
<html>
<body>

<h1>PHP Workshop #1</h1>

<?php
$x = "Hello World";

echo "<h3>" . $x "</h3>";
showname("Nattaaek", "Wattanuyan<br>");
bmi(70,176);

function showname($fname,$lname)
{
    echo $fname . $lname;
}

function bmi($w,$h)
{
    $h = $h/100;
    $bmi = $w / $h / $h;
    echo $bmi;
}

?>

</body>
</html>