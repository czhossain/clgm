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

$sql = "SELECT * FROM calendar_events WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>Calendar Event Update form</h2>
          <form action='update-calendar.php' method='POST'>
        <label>ID: </label>
        <input type='text' name='id' required value='" . $row["id"] . "' readonly />
        <br><br>

        <label>Event Title: </label>
        <input type='text' name='title' required value='" . $row["title"] . "' />
        <br><br>

        <label>Start Date: </label>
        <input type='date' name='start_date' required value='" . $row["start_date"] . "' />
        <br><br>

        <label>End Date: </label>
        <input type='date' name='end_date' required value='" . $row["end_date"] . "' />
        <br><br>

        <label>Description: </label>
        <textarea name='description' rows='3' required>" . $row["description"] . "</textarea>
        <br><br>

        <input type='submit' value='Submit' />
        <br><br> 
        <a href='view-calendar.php'>View Events</a>
    </form>";

}
}
mysqli_close($conn);

?>
