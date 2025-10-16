<?php
//passing value
$title = $_POST['title'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$description = $_POST['description'];

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

$sql = "INSERT INTO calendar_events (title, start_date, end_date, description)
VALUES ('$title', '$start_date', '$end_date', '$description')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
