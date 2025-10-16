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

$sql = "SELECT * FROM programs WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>Program Details Update form</h2>
          <form action='update-program.php' method='POST'>
        <label>ID: </label>
        <input type='text' name='id' required value='" . $row["id"] . "' readonly />
        <br><br>

        <label>Program Name: </label>
        <input type='text' name='program_name' required value='" . $row["program_name"] . "' />
        <br><br>

        <label>Level: </label>
        <select name='level' required  >
            <option value=''>Select Level</option>
            <option value='Pre-University'>Pre-University</option>
            <option value='Undergraduate'>Undergraduate</option>
            <option value='Postgraduate'>Postgraduate</option>
        </select>
        <br><br>

        <label>Duration: </label>
        <input type='text' name='duration' required value='" . $row["duration"] . "' />
        <br><br>

        <label>Description: </label>
        <textarea name='description' rows='5' required>" . $row["description"] . "</textarea>
        <br><br>

        <label>Image: </label>
        <input type='text' name='image_url' value='" . $row["image_url"] . "' />
        <br><br>

        <input type='submit' value='Submit' />
        <br><br> 
        <a href='view-programs.php'>View Programs</a>
    </form>";

}
}
mysqli_close($conn);

?>
