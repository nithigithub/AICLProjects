<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiclstudents";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Aicldetail(
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
contact VARCHAR(20) NOT NULL,
email VARCHAR(10) NOT NULL,
messages  VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table AICLformTable created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>