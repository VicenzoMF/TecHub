<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$bd = new mysqli($servername, $username, $password);

// Check connection
if ($bd->connect_error) {
  die("Connection failed: " . $bd->connect_error);
}
echo "Connected successfully";
?>
