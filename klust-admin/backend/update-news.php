<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klust_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data from POST
$id = $_POST['id'];
$title = $_POST['title'];
$image_url = $_POST['image_url'];
$content = $_POST['content'];
$date = $_POST['date'];
$status = $_POST['status'];

$sql = "UPDATE campus_news SET title='$title', image_url='$image_url', content='$content', DATE='$date', STATUS='$status' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
