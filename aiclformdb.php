<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstName'];
$latename = $_POST['lastname'];
$email = $_POST['email'];
$contact=$_POST['contact'];
$messages=$_POST['messages'];


$sql = "INSERT INTO AiclTables (firstname,lastname, email, contact, messages)
VALUES ('$firstname','$lastname','$email','$contact','$messages')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>