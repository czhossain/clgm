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

$sql = "SELECT * FROM applications";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo" <table border='1' cellpadding='10'>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Program</th>
        <th>Application Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    ";
    while($row = mysqli_fetch_assoc($result)) {
        echo " <tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["student_name"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["phone"] . "</td>
        <td>" . $row["program"] . "</td>
        <td>" . $row["application_date"] . "</td>
        <td>" . $row["status"] . "</td>
        <td><a href='update-application-form.php?id=" . $row["id"] . "'>Update</a></td>
    </tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
