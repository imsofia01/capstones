<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "scores";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed");
}

$sql = "SELECT id, pangalan, correctCount, wrongCount, total FROM drag_img";
$result = mysqli_query($conn, $sql);

$sql = "SELECT id, username, total_tanong, total_correct, total_wrong, percentage, puntos FROM names";
$result = mysqli_query($conn, $sql);



?>



