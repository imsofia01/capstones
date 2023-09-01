<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Video with Skip Feature</title>
    <style>
        #video-container {
            max-width: 800px;
            margin: 0 auto;
        }

        #video-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        #skip-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div id="video-container">
        <video id="myVideo" width="100%" controls>
            <source src="lesson1.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div id="video-controls">
        <button id="skip-button">Skip Ahead</button>
    </div>

    <script>
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