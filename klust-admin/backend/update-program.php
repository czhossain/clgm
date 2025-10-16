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
$program_name = $_POST['program_name'];
$level = $_POST['level'];
$duration = $_POST['duration'];
$description = $_POST['description'];
$image_url = $_POST['image_url'];

$sql = "UPDATE programs SET program_name='$program_name', LEVEL='$level', duration='$duration', description='$description', image_url='$image_url' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
