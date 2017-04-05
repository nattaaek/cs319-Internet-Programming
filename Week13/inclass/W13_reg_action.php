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

            
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
?>