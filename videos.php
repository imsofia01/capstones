<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/video.css">
    <title> 2D Video </title>

</head>
<body>

<div class="toggle">
        <a><i class="fa fa-bars"></i></a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="videos.php">2D VIDEO & ASSESSMENT</a></li>
            <li><a href="quizresult.php">LEADERBOARD</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
        </ul>
    </div>
    <br>
    <body>
    <div class="header">
    <h1> Mga Aralin </h1>
    </div>
    

    <!-- button sa contain -->
    <div ontouchstart="">
        <div id="showButton" class="button">
        <a href="#"> MGA PATINIG </a>
         </div>
    </div>

    <!-- conatiner -->
    <div class="container" id="myContainer">
        <div id="video-container">
            <video id="myVideo" width="100%" controls>
            <source src="./videos/lesson1.mp4"  type="video/mp4">
        </video>
        
        
        
        <div id="video-controls">
        <button id="playButton">Ulitin ang Video</button>
        <button id="skip-button">Skip Ahead</button>
        <!-- <button id="openAssessmentButton" >Play</button> -->

        </div>
    </div>

</div>

</div>

  

    <script>
        
         // Toggle function
    $(document).ready(function(){
        $('.toggle').click(function(){
            $('.menu').toggleClass('active');
        });
    });

    // Get references to the button and container
    const showButton = document.getElementById('showButton');
    const myContainer = document.getElementById('myContainer');

    // Add a click event listener to the button
    showButton.addEventListener('click', () => {
        // Check the current display state of the container
        if (myContainer.style.display === 'none' || myContainer.style.display === '') {
            // If it's hidden, show it
            myContainer.style.display = 'block';
        } else {
            // If it's visible, hide it
            myContainer.style.display = 'none';
        }
    });

    // Video and skip functions (similar to your original code)

    const video = document.getElementById('myVideo');
    const skipButton = document.getElementById('skip-button');
    const playButton = document.getElementById("playButton");
    const openAssessmentButton = document.getElementById("openAssessmentButton");

     // Function to open the assessment after video completion
     function openAssessment() {
        // Replace 'assessment_url' with the actual URL of your assessment
        var assessmentUrl = "save-names.php";

        // Open the assessment in a new window or tab
        window.open(assessmentUrl, "_blank");
    }

    video.addEventListener("ended", () => {
        // Hide the video element when it finishes playing
        video.style.display = "none";
        
        // Show the play button
        playButton.style.display = "block";

        // Automatically open the assessment when the video ends
        openAssessment();
    });

    playButton.addEventListener("click", () => {
        // Show the video element
        video.style.display = "block";
        
        // Hide the play button
        playButton.style.display = "none";
        
        // Restart the video
        video.currentTime = 0;
        video.play();
    });

    skipButton.addEventListener('click', () => {
        // Define the number of seconds to skip
        const skipSeconds = 60; // You can adjust this value

        // Calculate the new time
        const newTime = video.currentTime + skipSeconds;

        // Check if the new time is within the video duration
        if (newTime <= video.duration) {
            video.currentTime = newTime;
        } else {
            // If it's beyond the video duration, jump to the end
            video.currentTime = video.duration;
        }
    });
        

        

    </script>
</body>
</html>