<?php

// Create connection
$conn = new mysqli('localhost','root', '', 'gamevault2.0');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>