<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_data";
var_dump($username);exit;
$conn = new mysqli($servername, $username, $password, $dbname);   //Creating database connection.

// Checking connection is establish or not..
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_select_db($conn,"form_data");
echo"DB is selected successfully";

//Insert data
$sql = "INSERT INTO sample_data (Email,Password,Message) VALUES ('$_POST(mail)','$_POST(pass)','$_POST(address)')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close connection
mysqli_close($conn);
?>