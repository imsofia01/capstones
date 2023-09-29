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

</head>
<body>

<div class="toggle">
        <a href="home.php" class="material-symbols-outlined">
arrow_back
</a>
    </div>


<div class="area" >
<h1><span>M</span><span>G</span><span>A</span><span> </span><span>A</span><span>R</span><span>A</span><span>L</span><span>I</span><span>N</span><span>!</span></h1>

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

    <!-- button sa contain -->
    <div ontouchstart="">
        <div id="showButton" class="button">
        <a href="buttons.php"> MGA PATINIG </a>
         </div>
    </div>

    

    <br>
    <br>

  <!-- button sa contain -->
  <div ontouchstart="">
        <div id="showButton2" class="button">
        <a href="#"> MGA KATINIG </a>
         </div>
    </div>

    <br>
    <br>

      <!-- button sa contain -->
  <div ontouchstart="">
        <div id="showButton2" class="button">
        <a href="#"> MGA KATINIG </a>
         </div>
    </div>


    </body>
    </html>

    <script>
        

    // Get references to the button and container
    const showButton = document.getElementById('showButton');
    const showButton2 = document.getElementById('showButton2');
    const myContainer = document.getElementById('myContainer');

       // Add a click event listener to the button
       showButton2.addEventListener('click', () => {
        // Check the current display state of the container
        if (myContainer2.style.display === 'none' || myContainer2.style.display === '') {
            // If it's hidden, show it
            myContainer2.style.display = 'block';
        } else {
            // If it's visible, hide it
            myContainer2.style.display = 'none';
        }
    });

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


    // JavaScript for the second video container
    const video2 = document.getElementById('myVideo2');
    const playButton2 = document.getElementById('playButton2');
    const skipButton2 = document.getElementById('skip-button2');

     // Function to open the assessment after video completion
     function openAssessment() {
        // Replace 'assessment_url' with the actual URL of your assessment
        var assessmentUrl = "save-names.php";

        // Open the assessment in a new window or tab
        window.open(assessmentUrl, "_blank");
    }

    // Function to open the assessment after video completion
    function openAssessment2() {
    // Replace 'assessment_url' with the actual URL of your assessment
     var assessmentUrl = "save-namesD.php";

    // Open the assessment in a new window or tab
    window.open(assessmentUrl, "_blank");
    }

    // video 1
    video.addEventListener("ended", () => {
        // Hide the video element when it finishes playing
        video.style.display = "none";
        
        // Show the play button
        playButton.style.display = "block";

        // Automatically open the assessment when the video ends
        openAssessment();
    });

    video2.addEventListener("ended", () => {
        // Hide the video element when it finishes playing
        video2.style.display = "none";
        
        // Show the play button
        playButton2.style.display = "block";

        // Automatically open the assessment when the video ends
        openAssessment2();
    });


    playButton.addEventListener("click", () => {
        // Check if the video is currently paused
    if (video.paused) {
        // Play the video
        video.play();
        // Change the button text to "Pause Video"
        playButton.textContent = 'i-Pause Video';
    } else {
        // Pause the video
        video.pause();
        // Change the button text to "Play Video"
        playButton.textContent = 'i-Play Video';
    }
    });

    playButton2.addEventListener('click', function() {
        if (video2.paused) {
            video2.play();
            playButton2.textContent = 'i-Pause Video';
        } else {
            video2.pause();
            playButton2.textContent = 'Ulitin ang Video';
        }
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

    skipButton2.addEventListener('click', function() {
        // Add logic to skip ahead in the second video
     
           // Define the number of seconds to skip
           const skipSeconds = 60; // You can adjust this value

        // Calculate the new time
        const newTime = video2.currentTime + skipSeconds;

        // Check if the new time is within the video duration
        if (newTime <= video2.duration) {
            video2.currentTime = newTime;
        } else {
            // If it's beyond the video duration, jump to the end
            video2.currentTime = video2.duration;
        }
    });

        

    </script>
</body>
</html>