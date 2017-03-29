<!DOCTYPE html>
<html>
<head>
<style>
    p{
        color:red;
    }
</style>
</head>
<body>
    <h1>PHP Workshop #1</h1>
    <?php
        echo("<h3>Hello World</h3>");
        showname("Nattaaek","Wattanuyan");
        bmi(50,176);
        
        function showname($fname,$lname){
            echo("<p>Your name is " . $fname . " " . $lname . "</p>");
        }

        function bmi($w,$h){
            $h = $h/100;
            $bmi = $w / $h / $h;
            echo("<p>Your BMI is " . $bmi . "</p>");
        }
    ?>

</body>
</html>