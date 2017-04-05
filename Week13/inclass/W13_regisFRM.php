<!doctype html>
<HTML>
<head>
<TITLE>Login Page</TITLE>
<link rel="stylesheet" href="W13style.css" type="text/css" />
</head>
<BODY>
<form action="W13_reg_action.php" method="post">
      First name:<br />
       <input type="text" name="fname" placeholder="First name" required/><br />
       Last name:<br />
       <input type="text" name="lname" placeholder="Last name" required/><br />
       username:<br />
       <input type="text" name="username" placeholder="Username" required/><br />
       password:<br />
       <input type="password" name="password" placeholder="Password" required/><br /><br>
       <input type="submit" id="submit" value="REGISTRATION"/>
       <?php
            $servername = "localhost";
            $username = "root";
            $password = "mysql";
            $dbname = "week13DB";
      
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $name = $_POST['fname'] . $_POST['lname'];

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            mysqli_set_charset($conn,"utf8");
            $sql = "INSERT INTO users (username, password, nameis)
            VALUES ('$user', '$pass', '$name')";
       ?>
</form>
</BODY>
</HTML>