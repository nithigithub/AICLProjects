<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiclstudents";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Aicldetail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<table border='1'>";
    echo"<tr><th>firstname</th><th>lastname</th><th>contact</th><th>email</th><th>message</th></tr>";
    echo "<tr><td>" . $row['firstname']
    echo "<td>".$row['lastname'] 
    echo "<td>". $row['contact'] 
    echo  "<td>". $row['email'] 
    echo "<td>". $row['messages'] . "</td></tr>";
    echo "</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>