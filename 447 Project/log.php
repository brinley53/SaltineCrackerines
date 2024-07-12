<?php
// Connect to MySQL server, select database
session_start();
$mysqli = new mysqli('sql211.infinityfree.com', 'if0_36325610', 'Crackerines', 'if0_36325610_pokemon');

// Check connection
if ($mysqli->connect_error) {
    die('Could not connect: ' . $mysqli->connect_error);
}

// Send SQL query
$name = $_POST['name'];
$_SESSION['user'] = $_POST['name'];

$query = 'SELECT * FROM Player WHERE Name="' . $name . '"';
$result = $mysqli->query($query);


if (!$result) {
    die('Query failed: ' . $mysqli->error);
}

if ($result->num_rows === 0) {
    // No rows found, query came back empty
    header("Location: http://saltine.wuaze.com/erroruser.php");
} else {
    header("Location: http://saltine.wuaze.com/new_team_creator.php");
}

// Free resultset
$result->free();

// Close connection
$mysqli->close();
?>