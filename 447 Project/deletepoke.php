<?php
session_start();
// Connect to MySQL server, select database
$mysqli = new mysqli('sql211.infinityfree.com', 'if0_36325610', 'Crackerines', 'if0_36325610_pokemon');

// Check connection
if ($mysqli->connect_error) {
    die('Could not connect: ' . $mysqli->connect_error);
}

// Send SQL query

$idquery = $mysqli->query("SELECT ID FROM Pokemon WHERE Name='" . $_GET['id'] . "'");
$row = mysqli_fetch_assoc($idquery);

$result = $mysqli->query("DELETE FROM Pokemon_In_Team WHERE Player_Name = '" . $_SESSION['user'] . "' AND Pokemon_ID =" . $row['ID'] . "");

if (!$result) {
    die('Query failed: ' . $mysqli->error);
}

header("Location: http://saltine.wuaze.com/new_team_creator.php");

// Free resultset
$result->free();

// Close connection
$mysqli->close();
?>