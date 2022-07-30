<?php

$host = "localhost";
$db_name = "react_crud";
$db_user ="root";
$db_pass = "Test#123";

// Create connection
$db_conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

// Check connection
if (!$db_conn) {
  die("Connection failed: " . mysqli_connect_error());
}