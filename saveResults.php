<?php
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quizResults = $_POST['quizResults']; // Assuming you're sending JSON data
    $quizResultsArray = json_decode($quizResults, true);

    $correctCount =  $quizResultsArray['correctCount'];
    $wrongCount =  $quizResultsArray['wrongCount'];
    $totalQuestions =  $quizResultsArray['total'];


    $getHighestUidQuery = "SELECT MAX(id) AS maxUid FROM drag_img";
    $result = mysqli_query($conn, $getHighestUidQuery);
    $row = mysqli_fetch_assoc($result);
    $highestUid = $row['maxUid'];

    // Insert data into the database
    $updateQuery = "UPDATE drag_img SET
    correctCount = '$correctCount',
    wrongCount = '$wrongCount',
    total = '$totalQuestions'
    WHERE id = '$highestUid'";
    if (mysqli_query($conn,  $updateQuery)) {
        echo "Quiz results saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
