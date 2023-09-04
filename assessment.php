<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!-- Video Container -->
    <div id="video-container">
        <h2>Video</h2>
        <video controls width="100%">
            <source src="your-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
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
In this code:

We have a video container initially visible with a video and a "Start Assessment" button.
When the "Start Assessment" button is clicked, the video container is hidden, and the assessment game container is displayed.
The assessment game contains a simple text-based question, an input field for the user's answer, and a "Submit Answer" button.
When the user clicks the "Submit Answer" button, it checks if the answer is correct and displays the result below the question.
You can customize and expand upon this basic example to create a more complex assessment game with multiple questions and a scoring system.





