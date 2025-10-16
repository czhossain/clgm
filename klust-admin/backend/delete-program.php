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

// sql to delete a record
$id = $_GET['id'];
$sql = "DELETE FROM programs WHERE id='$id'";

mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: ../backend/view-programs.php");
exit();
?>
