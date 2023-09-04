<?php

// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include_once "config/database.php";

  

  function getAllscore($formData, $conn) {
    $total_tanong = $formData["total_tanong"];
    $total_correct = $formData["total_correct"];
    $total_wrong = $formData["total_wrong"];
    $percentage = $formData["percentage"];
    $puntos = $formData["puntos"];

    $sql = "INSERT INTO name (total_tanong, total_correct, total_wrong, percentage, puntos) VALUES ('$total_tanong', '$total_correct', '$total_wrong', '$percentage', '$puntos')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
}
?>
