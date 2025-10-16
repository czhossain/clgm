<?php
//passing value
$title = $_POST['title'];
$image_url = $_POST['image_url'];
$content = $_POST['content'];
$date = $_POST['date'];
$status = $_POST['status'];

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

$sql = "INSERT INTO campus_news (title, image_url, content, date, status)
VALUES ('$title', '$image_url', '$content', '$date', '$status')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
