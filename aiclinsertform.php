<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiclstudents";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$email=$_POST['email'];
$messages=$_POST['messages'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Aicldetail (firstname, lastname, contact, email , messages)
VALUES ('$firstname', '$lastname', '$contact', '$email','$messages')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>