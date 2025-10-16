<!DOCTYPE html>
<html>
<head>
    <title>View Applications</title>
    <style>
        body { font-family: Arial; margin: 0; padding: 20px; background: #f4f4f4; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { color: #333; margin-top: 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background: #0b2242; color: white; padding: 12px; text-align: left; }
        td { padding: 10px; border-bottom: 1px solid #ddd; }
        tr:hover { background: #f9f9f9; }
        a { color: #0b2242; text-decoration: none; padding: 5px 10px; }
        a:hover { background: #0b2242; color: white; border-radius: 3px; }
        .back-btn { display: inline-block; margin-bottom: 15px; padding: 10px 20px; background: #0b2242; color: white; border-radius: 3px; }
        .back-btn:hover { background: #1a3a6e; }
    </style>
</head>
<body>
<div class="container">
    <h2>All Applications</h2>
    <a href="../manage-applications.html" class="back-btn">Back to Admin</a>
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
</div>
</body>
</html>
