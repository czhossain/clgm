<!DOCTYPE html>
<html>
<head>
    <title>View News</title>
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
    <h2>All News</h2>
    <a href="../manage-news.html" class="back-btn">Back to Admin</a>
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

$sql = "SELECT * FROM campus_news";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    echo" <table border='1' cellpadding='10'>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Content</th>
        <th>Date</th>
        <th>Status</th>
        <th colspan='2'>Actions</th>
    </tr>
    ";
    while($row = mysqli_fetch_assoc($result)) {
        echo " <tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["title"] . "</td>
        <td>" . $row["image_url"] . "</td>
        <td>" . $row["content"] . "</td>
        <td>" . $row["date"] . "</td>
        <td>" . $row["status"] . "</td>
        <td><a href='update-news-form.php?id=" . $row["id"] . "'>Update</a></td>
        <td><a href='delete-news.php?id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a></td>
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
