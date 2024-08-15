<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbweb = "app_peminjamanbarang";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbweb);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>