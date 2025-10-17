<?php
/**
 * Database Configuration for Heroku Deployment
 * Automatically parses Heroku environment variables
 */

// Check if running on Heroku (CLEARDB_DATABASE_URL exists)
if (getenv("CLEARDB_DATABASE_URL")) {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    
    $host = $url["host"];
    $db = substr($url["path"], 1);
    $user = $url["user"];
    $pass = $url["pass"];
    $port = $url["port"] ?? 3306;
}
// Fallback for local development
else {
    $host = getenv("DB_HOST") ?: "localhost";
    $db = getenv("DB_NAME") ?: "klust_db";
    $user = getenv("DB_USER") ?: "root";
    $pass = getenv("DB_PASS") ?: "";
    $port = getenv("DB_PORT") ?: 3306;
}

// Create connection
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Set charset to utf8
$conn->set_charset("utf8mb4");

// Return connection object
return $conn;
?>
