<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$con = mysqli_connect("localhost", "root", "", "BankBuddy") or die("Connection Failed, Server is Temporarily Down");

?>
