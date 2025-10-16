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

$id = $_GET['id'];

$sql = "SELECT * FROM applications WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>Application Update form</h2>
          <form action='update-application.php' method='POST'>
        <label>ID: </label>
        <input type='text' name='id' required value='" . $row["id"] . "' readonly />
        <br><br>

        <label>Student Name: </label>
        <input type='text' name='student_name' required value='" . $row["student_name"] . "' readonly />
        <br><br>

        <label>Email: </label>
        <input type='email' name='email' required value='" . $row["email"] . "' readonly />
        <br><br>

        <label>Phone: </label>
        <input type='text' name='phone' required value='" . $row["phone"] . "' readonly />
        <br><br>

        <label>Program: </label>
        <input type='text' name='program' required value='" . $row["program"] . "' readonly />
        <br><br>

        <label>Application Date: </label>
        <input type='date' name='application_date' required value='" . $row["application_date"] . "' readonly />
        <br><br>

        <label>Status: </label>
        <select name='status' required>
            <option value=''>Select Status</option>
            <option value='Pending'>Pending</option>
            <option value='Approved'>Approved</option>
            <option value='Rejected'>Rejected</option>
        </select>
        <br><br>

        <input type='submit' value='Submit' />
        <br><br> 
        <a href='view-applications.php'>View Applications</a>
    </form>";

}
}
mysqli_close($conn);

?>
