<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Register student
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "INSERT INTO students (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "Student registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>