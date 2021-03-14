<html>
<head>
<h1>first program</h1>
<body>
<?php
$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("unable to connect" . $conn->connect_error);
}
echo "connected successfully!!!";
// Create database
$sql = "CREATE DATABASE Aicldetail";
if ($conn->query($sql) === TRUE) {//passing the sql here
  echo "Database aiclDB created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
</body>
</html>