<?php

// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include_once "config/database.php";

  
  function getAllscore($formData, $conn) {
    $correctCount = $formData["correctCount"];
    $wrongCount = $formData["wrongCount"];
    $total = $formData["total"];
  
    $sql = "INSERT INTO drag_img (correctCount, wrongCount, total, percentage, puntos) VALUES ('$correctCount', '$wrongCount', '$total')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
}
?>
