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

$sql = "SELECT * FROM calendar_events";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo" <table border='1' cellpadding='10'>
    <tr>
        <th>ID</th>
        <th>Event Title</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Description</th>
        <th colspan='2'>Actions</th>
    </tr>
    ";
    while($row = mysqli_fetch_assoc($result)) {
        echo " <tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["title"] . "</td>
        <td>" . $row["start_date"] . "</td>
        <td>" . $row["end_date"] . "</td>
        <td>" . $row["description"] . "</td>
        <td><a href='update-calendar-form.php?id=" . $row["id"] . "'>Update</a></td>
        <td><a href='delete-calendar.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>
    </tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
