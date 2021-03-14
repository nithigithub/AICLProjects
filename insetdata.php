<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiclstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//insering data into table created
$sql = "INSERT INTO Aicldetail (firstname, lastname, email,contact,messages)
VALUES ('John', 'Doe', 'john@example.com',9564123000,'hiii')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>