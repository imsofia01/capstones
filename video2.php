<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,600,0,200" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/video.css">
    <title> 2D Video </title>
    <link rel="icon" type="image/x-icon" href="./pics/logo.png">

</head>
<body>

<div class="toggle">
        <a href="home.php" class="material-symbols-outlined">
arrow_back
</a>
    </div>


<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>


   <!-- conatiner -->
   <div class="container" id="myContainer">
        <div id="video-container">
            <video id="myVideo" width="100%" controls>
            <source src="./videos/lesson1.mp4"  type="video/mp4">
        </video>
        
        <div id="video-controls">
        <button id="playButton">Ulitin ang Video</button>
        <button id="skip-button">Maglaktaw sa Video</button>
        <!-- <button id="openAssessmentButton" >Play</button> -->
        </div>
    </div>
</div>


    </body>
    </html>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('myVideo');
    const skipButton = document.getElementById('skip-button');
    const playButton = document.getElementById('playButton');

    skipButton.addEventListener('click', skipVideo);
    video.addEventListener('ended', goToNextPage);
    playButton.addEventListener('click', playVideo);

    function skipVideo() {
        // Skip 10 seconds ahead in the video
        video.currentTime += 100; // You can adjust the number of seconds to skip
    }

    function playVideo() {
        // Play the video from the beginning
        video.currentTime = 0;
        video.play();
    }

    function goToNextPage() {
            // Redirect to the next page when the video ends
            var result = confirm("Gusto mo bang ipag-patuloy ang pagsusulit?");
            if (result) {
                window.location.href = 'save-names.php'; // Replace with the actual URL of the assessment page
            }
        }
    });

    </script>

</body>
</html>