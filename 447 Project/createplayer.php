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
$color = $_POST['color'];
$_SESSION['user'] = $_POST['name'];
$query1 = 'SELECT Name FROM Player';
$result1 = $mysqli->query($query1);

$names = [];
while ($row = $result1->fetch_assoc()) {
    $names[] = $row['Name'];
}

// Check if the name already exists in the array of names
if (in_array($name, $names)) {
    header("Location: http://saltine.wuaze.com/erroruser.php");
} else {
    $query = 'INSERT INTO Player VALUES ("' . $name . '", "' . $color . '")';
    $result = $mysqli->query($query);


    if (!$result) {
        die('Query failed: ' . $mysqli->error);
    }

    header("Location: http://saltine.wuaze.com/new_team_creator.php");
}

// Free resultset
$result->free();

// Close connection
$mysqli->close();
?>