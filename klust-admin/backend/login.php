<?php
session_start();

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

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT id, username FROM admin_users WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  header("Location: ../dashboard.html");
} else {
  echo "Wrong username or password";
}

mysqli_close($conn);
?>
