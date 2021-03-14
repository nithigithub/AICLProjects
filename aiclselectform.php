<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM AiclTables";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<table border='1'>";
    echo"<tr><th>Firstname</th><th>Lastname</th><th>Email</th><th>Contact</th><th>Message</th></tr>";
    echo "<tr><td>" . $row['firstname'] . "</td>";
    echo "<td>" .$row['lastname'] . "</td>";
    echo "<td>" .$row['email'] . "</td>" ;
    echo "<td>" . $row['contact'] . "</td>";
    echo "<td>" . $row['messages'] . "</td></tr>";
    echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>