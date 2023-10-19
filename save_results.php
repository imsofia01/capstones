<?php
include 'config/database.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quizResults = $_POST['quizResults']; // Assuming you're sending JSON data
    $quizResultsArray = json_decode($quizResults, true);
    
    // Extract data from the quizResultsArray
    $totalTanong = $quizResultsArray['totalTanong'];
    $totalCorrect = $quizResultsArray['totalCorrect'];
    $totalWrong = $quizResultsArray['totalWrong'];
    $percentage = $quizResultsArray['percentage'];
    $totalPuntos = $quizResultsArray['totalPuntos'];


    $getHighestUidQuery = "SELECT MAX(id) AS maxUid FROM names";
    $result = mysqli_query($conn, $getHighestUidQuery);
    $row = mysqli_fetch_assoc($result);
    $highestUid = $row['maxUid'];

    // Perform the database insertion
    $updateQuery = "UPDATE names SET
                    total_tanong = '$totalTanong',
                    total_correct = '$totalCorrect',
                    total_wrong = '$totalWrong',
                    percentage = '$percentage',
                    puntos = '$totalPuntos'
                    WHERE id = '$highestUid'";

    if (mysqli_query($conn,  $updateQuery)) {
        echo "Quiz results saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
