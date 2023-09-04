<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/assess.css">

    <title>Video and Assessment Game</title>

    <style>
        /* Style for the video container */
        #video-container {
            width: 80%;
            margin: 0 auto;
        }
        


        
        /* Style for the assessment game */
        #assessment-game {
            display: none; /* Initially hidden */
            width: 80%;
            margin: 0 auto;
        }
    </style>

</head>
<body>

<div class="toggle">
        <a href="videos.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></a>
    </div>

    <!-- Video Container -->
    <div id="video-container">
      
        <button onclick="startAssessment()">Start Assessment</button>
    </div>

    <!-- Assessment Game Container -->
    <div id="assessment-game">
        <h2>Assessment Game</h2>
        <!-- Your assessment game content goes here -->
        <p>Question 1: What is the capital of France?</p>
        <input type="text" id="answer">
        <button onclick="checkAnswer()">Submit Answer</button>
        <p id="result"></p>
    </div>

    <script>
  
        function startAssessment() {
            // Hide the video container
            document.getElementById('video-container').style.display = 'none';

            // Show the assessment game container
            document.getElementById('assessment-game').style.display = 'block';
        }

        function checkAnswer() {
            // Get the user's answer
            const userAnswer = document.getElementById('answer').value.toLowerCase();

            // Check the answer
            if (userAnswer === 'paris') {
                document.getElementById('result').textContent = 'Correct!';
            } else {
                document.getElementById('result').textContent = 'Incorrect. Try again.';
            }
        }
    </script>
</body>
</html>



