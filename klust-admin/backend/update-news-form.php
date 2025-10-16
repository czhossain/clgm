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

$sql = "SELECT * FROM campus_news WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>News Details Update form</h2>
          <form action='update-news.php' method='POST'>
        <label>ID: </label>
        <input type='text' name='id' required value='" . $row["id"] . "' readonly />
        <br><br>

        <label>Title: </label>
        <input type='text' name='title' required value='" . $row["title"] . "' />
        <br><br>

        <label>Image URL: </label>
        <input type='text' name='image_url' required value='" . $row["image_url"] . "' />
        <br><br>

        <label>Content: </label>
        <textarea name='content' rows='5' required>" . $row["content"] . "</textarea>
        <br><br>

        <label>Date: </label>
        <input type='date' name='date' required value='" . $row["date"] . "' />
        <br><br>

        <label>Status: </label>
        <select name='status' required>
            <option value=''>Select Status</option>
            <option value='Draft'>Draft</option>
            <option value='Published'>Published</option>
        </select>
        <br><br>

        <input type='submit' value='Submit' />
        <br><br> 
        <a href='view-news.php'>View News</a>
    </form>";

}
}
mysqli_close($conn);

?>
