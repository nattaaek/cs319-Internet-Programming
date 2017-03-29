<html>
    <head><link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"></head>
    <style>
              body{
                  font-family: 'Montserrat', sans-serif;
              }
            h1{
                color : blue;
            }
    </style>
<body>

    <h1>PHP Action Page for display an output</h1>
    <p> <?php echo "Welcome  " . $_POST["name"]; ?> </p>
    <p> <?php echo "Your Email: ".$_POST["email"]; ?> </p>
    <p>         <?php
            if (isset($_POST['Result']))
            {
            $radioVal = $_POST["MyRadio"];
            echo "Your gender: ";
            if($radioVal == "First")
            {
            echo("Male");
            }
            else if ($radioVal == "Second")
            {
            echo("Female");
            }
            }
            ?> </p>
    <p> <?php echo  "Your weight: " . $_POST["weight"]; ?> </p>
    <p> <?php echo  "Your height: ". $_POST["height"]; ?> </p>

</body>
</html>