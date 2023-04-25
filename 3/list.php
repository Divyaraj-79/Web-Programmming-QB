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

// List all registered students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. "<br>";
  }
} else {
  echo "No students registered yet";
}

$conn->close();
?>