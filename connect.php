<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sheffield";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
// Check connection
if (!$conn) {
    "";
}

// Create table Comments
$sql = "CREATE TABLE registration (
registration_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
department VARCHAR(255) NOT NULL,
session VARCHAR(255) NOT NULL,
start VARCHAR(255) NOT NULL,
finish VARCHAR(255) NOT NULL,
venue VARCHAR(255) NOT NULL,
registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  "";
} else {
 "";
}

?>