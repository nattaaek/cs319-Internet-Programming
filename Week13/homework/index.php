        
 
        <?php
            $serverName = "localhost";
            $userName = "root";
            $password = "mysql";
            $dbname = "employee";
            $dbName = "programming";

            $conn = mysqli_connect($serverName, $userName, $password, $dbname);
            $conn1 = mysqli_connect($serverName, $userName, $password, $dbName);

            if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            }
            if(!$conn1)
            {
                die("Connection failed:" . mysqli_connect_error());
            }

            mysqli_set_charset($conn,"utf8");
            mysqli_set_charset($conn1,"utf8");
            $sql = "SELECT * FROM employee";
            $sql1 = "SELECT * FROM username";

            $result = mysqli_query($conn, $sql);
            $result1 = mysqli_query($conn1, $sql1);

        if (mysqli_num_rows($result) > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "id:  ". $row["id"] . "Sex: " . $row["sex"] ."<br>";
            }
        }
        else{

            echo "0 results";
        }

        if(mysqli_num_rows($result1) > 0) {
            while($row = mysqli_fetch_assoc($result1))
            {
                echo "username : " . $row["username"] . "password : " . $row["password"] . "name : " . $row["nameis"] . "<br>";
            }
        }
        else{
            echo "0 result1";
        }
        ?>