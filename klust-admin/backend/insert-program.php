<?php
//passing value
$program_name = $_POST['program_name'];
$level = $_POST['level'];
$duration = $_POST['duration'];
$description = $_POST['description'];
$image_url = $_POST['image_url'];

// server credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klust_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO programs (program_name, LEVEL, duration, description, image_url)
VALUES ('$program_name', '$level', '$duration', '$description', '$image_url')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
