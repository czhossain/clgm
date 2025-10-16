<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "klust_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST['student_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $program = $_POST['program'];
    $application_date = date('Y-m-d');
    $status = 'Pending';

    $sql = "INSERT INTO applications (student_name, email, phone, program, application_date, status) 
            VALUES ('$student_name', '$email', '$phone', '$program', '$application_date', '$status')";
    
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    
    header("Location: ../../apply-online.php");
    exit();
}
?>
