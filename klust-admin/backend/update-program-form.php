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
?>
<html>
<head>
    <title>Update Program</title>
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
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h2>Program Details Update form</h2>
          <form action='update-program.php' method='POST'>
        <label>ID: </label>
        <input type='text' name='id' required value='" . $row["id"] . "' readonly />

        <label>Program Name: </label>
        <input type='text' name='program_name' required value='" . $row["program_name"] . "' />

        <label>Level: </label>
        <select name='level' required  >
            <option value=''>Select Level</option>
            <option value='Pre-University' " . ($row["LEVEL"] == 'Pre-University' ? 'selected' : '') . ">Pre-University</option>
            <option value='Undergraduate' " . ($row["LEVEL"] == 'Undergraduate' ? 'selected' : '') . ">Undergraduate</option>
            <option value='Postgraduate' " . ($row["LEVEL"] == 'Postgraduate' ? 'selected' : '') . ">Postgraduate</option>
        </select>

        <label>Duration: </label>
        <input type='text' name='duration' required value='" . $row["duration"] . "' />

        <label>Description: </label>
        <textarea name='description' rows='5' required>" . $row["description"] . "</textarea>

        <label>Image: </label>
        <input type='text' name='image_url' value='" . $row["image_url"] . "' />

        <input type='submit' value='Submit' />
        <a href='view-programs.php'>View Programs</a>
    </form>";

}
}
mysqli_close($conn);

?>
</div>
</body>
</html>
