<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klust_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];

$sql = "DELETE FROM applications WHERE id=$id";
mysqli_query($conn, $sql);

mysqli_close($conn);
header("Location: view-applications.php");
exit();
?>
