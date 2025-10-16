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
$status = $_POST['status'];

$sql = "UPDATE applications SET status='$status' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    echo "<br><a href='view-applications.php'>Back to Applications List</a>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
    echo "<br><a href='view-applications.php'>Back to Applications List</a>";
}

mysqli_close($conn);

?>
