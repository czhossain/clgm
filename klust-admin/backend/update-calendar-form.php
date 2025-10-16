<!DOCTYPE html>
<html>
<head>
    <title>Update Calendar Event</title>
    <style>
        body { font-family: Arial; margin: 0; padding: 20px; background: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .container { width: 100%; max-width: 600px; }
        h2 { color: #333; text-align: center; }
        form { background: white; padding: 30px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        label { display: block; margin-top: 15px; color: #333; font-weight: bold; }
        input, select, textarea { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; }
        input[type="submit"] { background: #0b2242; color: white; cursor: pointer; margin-top: 20px; border: none; }
        input[type="submit"]:hover { background: #1a3a6e; }
        a { color: #0b2242; text-decoration: none; display: inline-block; margin-top: 15px; text-align: center; width: 100%; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="container">
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

        <label>Event Title: </label>
        <input type='text' name='title' required value='" . $row["title"] . "' />

        <label>Start Date: </label>
        <input type='date' name='start_date' required value='" . $row["start_date"] . "' />

        <label>End Date: </label>
        <input type='date' name='end_date' required value='" . $row["end_date"] . "' />

        <label>Description: </label>
        <textarea name='description' rows='3' required>" . $row["description"] . "</textarea>

        <input type='submit' value='Submit' />
        <a href='view-calendar.php'>View Events</a>
    </form>";

}
}
mysqli_close($conn);

?>
</div>
</body>
</html>
