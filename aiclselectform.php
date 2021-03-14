<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM AICLTables";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "<table border='1'>";
    echo"<tr><th>Firstname</th><tr>Lastname</tr><tr>Email</tr><th>Contact</th><th>Message</th></tr>";
    echo "<tr><td>" . $row['firstname']  . $row['lastname']  . $row['Email'] . $row['contact'] . $row['messagetext'] . "</td></tr>";
    echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>