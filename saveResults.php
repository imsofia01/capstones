<?php
include 'config/database.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quizResults = $_POST['quizResults']; // Assuming you're sending JSON data
    $quizResultsArray = json_decode($quizResults, true);
    

    // Extract data from the quizResultsArray
    $correctCount = $quizResultsArray['correctCount'];
    $wrongCount = $quizResultsArray['wrongCount'];
    $total = $quizResultsArray['total'];
    


    $getHighestUidQuery = "SELECT MAX(id) AS maxUid FROM drag_img";
    $result = mysqli_query($conn, $getHighestUidQuery);
    $row = mysqli_fetch_assoc($result);
    $highestUid = $row['maxUid'];

    // Perform the database insertion
    $updateQuery = "UPDATE drag_img SET
                    correctCount = '$coorectCount',
                    wrongCount = '$wrongCount',
                    total = '$total',
                    WHERE id = '$highestUid'";

    if (mysqli_query($conn,  $updateQuery)) {
        echo "Quiz results saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
