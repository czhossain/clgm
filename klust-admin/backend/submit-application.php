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

$student_name = $_POST['student_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$program = $_POST['program'];
$application_date = date('Y-m-d');
$status = 'Pending';

$sql = "INSERT INTO applications (student_name, email, phone, program, application_date, STATUS) 
VALUES ('$student_name', '$email', '$phone', '$program', '$application_date', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "Application submitted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
