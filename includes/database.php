<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "eventer";

// Create connection
$con = new mysqli($host, $username, $password, $db);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Asia/kolkata');
session_start();

?>