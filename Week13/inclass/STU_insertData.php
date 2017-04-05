<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('สิรินธร', 'จียาศักดิ์', 'sirinthorn@gmail.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
