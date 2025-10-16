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

mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: view-applications.php");
exit();
?>
