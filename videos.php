<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/video.css">
    <title>2D Interactive Video</title>

</head>
<body>

<div class="toggle">
        <a><i class="fa fa-bars"></i></a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="videos.php">2D VIDEO & ASSESSMENT</a></li>
            <li><a href="#">LEADERBOARD</a></li>
            <li><a href="#">ABOUT US</a></li>
        </ul>
    </div>
    <br>
    <div id="video-container">
        <video id="myVideo" width="100%" controls>
            <source src="./videos/lesson1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div id="video-controls">
        <button id="skip-button">Skip Ahead</button>
    </div>

    <script>
        // toggle function
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.menu').toggleClass('active');
            });
        });


        // video skip funtion
        const video = document.getElementById('myVideo');
        const skipButton = document.getElementById('skip-button');

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