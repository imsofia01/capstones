<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
include 'config/database.php';


ob_start();
include 'save-namesD.php';
ob_end_clean();

$sql = "SELECT * FROM drag_img";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

   
    <link rel="stylesheet" href="css/sample.css">
    <title>Pagsusulit</title>
    <link rel="icon" type="image/x-icon" href="./pics/logo.png">
</head>

<body>
<div class="home-box custom-box ">
        <h1><?php echo isset($_POST['pangalan']) ? htmlspecialchars($_POST['pangalan']) : ''; ?>!</h1>
        <br>
        <h2> Pagsusulit  </h2>
        <p> Bilang ng mga Imahe: 6 </p>
        <button id="btn" type="button" class="btn" onclick="simulaQuiz()"> Simula </button>
    </div>

  <!-- drag box w/ picture -->
  <div  id="container-box-1" class="container-box custom-box hide" >
        <div class="tanong-bilang">
        <h1> Ilagay ang imahe sa tamang kahon </h1>
        </div>

    <div class="container custom-box">
      <div class="row">
      <!-- Content for the first row goes here -->
      <div id="draggable-container" class="draggable-element">
        <img class="draggable" draggable="true" src="pics/gabi.png" id="Gabi"> </img>
        <img class="draggable" draggable="true" src="pics/umaga.png" id="Umaga"> </img>
        <img class="draggable" draggable="true" src="pics/hapon.png" id="Hapon"> </img>
        <img class="draggable" draggable="true" src="pics/tanghali.png" id="Tanghali"> </img>
        <img class="draggable" draggable="true" src="pics/salamat.png" id="Salamat"> </img>
        <img class="draggable" draggable="true" src="pics/kamusta.png" id="Kamusta"> </img>
        </div>
  </div>
    </div>

  <div class="row">
    <!-- Content for the second row goes here -->
      <div id="draggable-container" class="droppable-points">
          <div class="droppable" data-draggable-id="Umaga"> <span> Magandanag Umaga </span> </div> 
          <div class="droppable" data-draggable-id="Hapon"> <span> Magandang Hapon </span> </div>
          <div class="droppable" data-draggable-id="Gabi"> <span> Magandang Gabi </span> </div>
          <div class="droppable" data-draggable-id="Tanghali"> <span> Magandang Tanghali </span> </div> 
          <div class="droppable" data-draggable-id="Salamat"> <span> Salamat Po </span> </div>
          <div class="droppable" data-draggable-id="Kamusta"> <span> Kamusta Po </span> </div>
        </div>
        <br>
        <div class="score-indicator">
      <span id="correctCount">0</span> 
        <span id="wrongCount">0</span>
    </div>
    <br>
        <div class="sunod-tanong-btn">
        <button id="btn" type="button" class="btn" onclick="sunod()"> ISAVE </button>
   
      </div>
  </div>
  </div>

   
<form action="dragResult.php" class="results" id="submitButton" method="POST" onsubmit="saveQuizResults()">
        <div class="result-box custom-box hide">
            <h1> Mga resulta ng pagsusulit </h1>
            <table>
                  <tr>
                      <td> <label for="correctCount"> Tamang Sagot </label> </td>
                      <td><span class="correctCount" id="correctCountDisplay" name="quizResults">0</span></td>
                  </tr>
                  <tr>
                      <td> <label for="wrongCount"> Maling Sagot </label> </td>
                      <td><span class="wrongCount" id="wrongCountDisplay" name="quizResults">0</span></td>
                  </tr>
                  <tr>
                    <td> <span for="total"> Kabuoang Tama</label></td>
                    <td><span class="total" id="totalDisplay" type="hidden" name="quizResults" id="quizResultsInput" ></span></td>
                </tr>
            </table>
            <button type="button" class="btn" onclick="tryAgain()"> Subukan Ulit </button>
            <button type="button" class="btn" onclick="backHome()"> Tahanan </button>
            <button type="submit" class="btn" onclick="submit()"> Save </button>  
        </div>
        </form>
  

  <script type="text/javascript">
const homeBox = document.querySelector(".home-box");
const container =document.querySelector("#container-box-1");
const customBox = document.querySelector(".custom-box")
const dropNumber = document.querySelector(".tanong-bilang");

const containerBox =document.querySelector("container-box");
const resultBox = document.querySelector(".result-box");
const nextBtn = document.getElementById('myBtn');
const answersIndicatorContainer = document.querySelectorAll(".sagot-indicator");
const sagotIndicator = document.querySelector('.sagot-indicator');

let questionCounter = 0;
let results = [];


// Get all draggable elements
const draggableElements = document.querySelectorAll('.draggable');

// Add event listeners to enable dragging
  draggableElements.forEach((element) => {
    element.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id);

    //console.log(draggableElements)
  });
});

// Get all droppable elements
const droppableElements = document.querySelectorAll('.droppable');


// Add event listeners to enable dropping
droppableElements.forEach((element) => {
  element.addEventListener('dragover', (e) => {
    e.preventDefault();
  });

  element.addEventListener('drop', (e) => {
    e.preventDefault();
    
    const draggableId = e.dataTransfer.getData('text/plain');
    const draggableElement = document.getElementById(draggableId);
    const expectedAnswer = element.getAttribute('data-draggable-id');
    const isCorrect = draggableId === expectedAnswer;
    
     // Check if the droppable element already contains an image
      // An answer has already been placed, handle accordingly (e.g., display an error message)
     if (element.querySelector('.draggable')) {
      console.log('An answer has already been placed in the droppable element.');
      return;
    }
    
    if (isCorrect) {
      // Correct answer
      draggableElement.classList.add('correct');
      element.classList.add('correct');
      console.log('Correct answer!');

    // Disable drag functionality for the dropped image
    draggableElement.draggable = false;

    } else {
      // Wrong answer
      draggableElement.classList.add('wrong');
      element.classList.add('wrong');
      console.log('Wrong answer!');

       // Disable drag functionality for the dropped image
    draggableElement.draggable = false;

    }

      // Remove the element from its previous parent
      if (draggableElement.parentElement !== null) {
      draggableElement.parentElement.removeChild(draggableElement);
    }

    element.appendChild(draggableElement);
    

      // Store the result in the results array
      results.push(isCorrect);
  
// loop to get the wrong and correct answer for drag and drop images//
  let correctCount = 0;
  let wrongCount = 0;
  for(let i = 0; i < results.length; i++){
    if( results[i] === true){
      correctCount++;
    }else{
      wrongCount++;
    }
  }
  document.getElementById('correctCount').textContent = correctCount;
  document.getElementById('wrongCount').textContent = wrongCount;


  // Update the displayed counts in the table
document.getElementById('correctCountDisplay').textContent = correctCount;
document.getElementById('wrongCountDisplay').textContent = wrongCount;
document.getElementById('totalDisplay').textContent = correctCount + "/" + results.length;

return {
      correctCount: correctCount ,
      wrongCount: wrongCount,
      totalQuestions: results.length,
    };
});


// Function to save quiz results and send them to the server
function saveQuizResults() {
    // Get the quiz results from the HTML elements
    const correctCount = document.getElementById('correctCountDisplay').textContent;
    const wrongCount = document.getElementById('wrongCountDisplay').textContent;
    const total = document.getElementById('totalDisplay').textContent;

    // Create a JavaScript object to hold the results
    const quizResults = {
        correctCount: correctCount,
        wrongCount: wrongCount,
        total: total
    };

    // Send quiz results to the server using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "saveResults.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.responseText); // You can handle the server's response here
            } else {
                console.error("Error saving quiz results");
            }
        }
    };
    // Convert the JavaScript object to JSON
    const formData = `quizResults=${JSON.stringify(quizResults)}`;
    xhr.send(formData);
}

// Add an event listener to a button with the id "submitButton"
document.getElementById('submitButton').addEventListener('click', saveQuizResults);


});

function resetQuiz() {
  // Remove all images from droppable elements and reset classes
  draggableElements.forEach((element) => {
    element.classList.remove('correct', 'wrong');
    element.draggable = true;
    // Reset the images to their initial parent container
    document.getElementById('draggable-container').appendChild(element);
  });

  droppableElements.forEach((element) => {
    element.classList.remove('correct', 'wrong');
  });

  // Clear the results array
  results = [];

  // Reset the score indicators to 0
  document.getElementById('correctCount').textContent = '0';
  document.getElementById('wrongCount').textContent = '0';

  // Hide the resultBox and show the quizBox
  resultBox.classList.add('hide');
  container.classList.remove('hide');
}

// Call this function to reset the quiz
function tryAgain() {
      // hide the resultBox
      resultBox.classList.add("hide");
    // show the quizBox
    container.classList.remove("hide");
  resetQuiz();
  simulaQuiz();
}




function sunod() {
  // hide
    container.classList.add("hide");
    // show
    resultBox.classList.remove("hide");

    console.log('Next button clicked!');
 
  }

function simulaQuiz() {

// HIDE HOME BOX 
    homeBox.classList.add("hide");
    // show quiz box
    container.classList.remove("hide");
}



// function tryAgain(){
//     // hide the resultBox
//     resultBox.classList.add("hide");
//     // show the quizBox
//     container.classList.remove("hide");
//     resetQuiz();
//     simulaQuiz()

// }

function backHome() {
    // hide result box
    resultBox.classList.add("hide");
    // show home box
    homeBox.classList.remove("hide");
    resetQuiz();
}

</script>

</body>
</html>