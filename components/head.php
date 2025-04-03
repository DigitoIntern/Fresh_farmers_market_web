<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/custom.css">
    <title><?php echo $title ?> | Fresh Farmers Market</title>

    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
</head>
<boby>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fresh_farmers_market_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}