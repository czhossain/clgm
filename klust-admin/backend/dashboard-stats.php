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

// Count programs
$sql = "SELECT COUNT(*) as total FROM programs";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_programs = $row['total'];

// Count news
$sql = "SELECT COUNT(*) as total FROM campus_news";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_news = $row['total'];

// Count applications
$sql = "SELECT COUNT(*) as total FROM applications";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_applications = $row['total'];

mysqli_close($conn);
?>
