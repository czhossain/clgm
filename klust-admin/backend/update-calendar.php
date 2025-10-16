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
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$description = $_POST['description'];

$sql = "UPDATE calendar_events SET title='$title', start_date='$start_date', end_date='$end_date', description='$description' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    echo "<br><a href='view-calendar.php'>Back to Calendar List</a>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
    echo "<br><a href='view-calendar.php'>Back to Calendar List</a>";
}

mysqli_close($conn);

?>
