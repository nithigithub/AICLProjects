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
    die("connection cannot be established" . $conn->connect_error);
}
echo "connection established!!!";

$sql="Create Database myDB";
if ($conn->query($sql)=== TRUE){
    echo "Database aiclDB created";
}   else{
    echo "Error creating database: " . $conn->error;
}
$conn->close();
?>
</body>
</html>