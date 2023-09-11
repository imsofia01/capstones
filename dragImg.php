<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

include 'config/result.php';
// include 'config/result.php';
include 'dragPlay.php';


$sql = "SELECT * FROM gamescore";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

   
    <link rel="stylesheet" href="css/dragObject.css">
    <title>Mga image</title>
</head>

<body>
<div class="home-box custom-box ">
        <h1><?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>!</h1>
        <br>
        <h2> Pagsusulit  </h2>
        <p> Bilang ng mga Tanong: <span class="tanong"> </span></p>
        <button id="btn" type="button" class="btn" onclick="simulaQuiz()"> Simula </button>
    </div>

  <!-- drag box w/ picture -->
  <div  id="container-box-1" class="container-box custom-box hide" >
        <div class="tanong-bilang">
    
        </div>
     
        <div class="draggable-element">
          <img class="draggable" draggable="true" src="pics/girl.jpg" id="Babae"> </img>
          <img class="draggable" draggable="true" src="pics/lalaki.png" id="Lalaki"> </img>
          <img class="draggable" draggable="true" src="pics/kamay.png" id="Kamay"> </img>
        </div>

        <div class="droppable-points">
          <div class="droppable" data-draggable-id="Lalaki"> <span> Lalaki </span> </div> 
          <div class="droppable" data-draggable-id="Kamay"> <span> Kamay </span> </div>
          <div class="droppable" data-draggable-id="Babae"> <span> Babae </span> </div>
        </div>
          
        <div class="draggable-element">
        <img class="draggable" draggable="true" src="pics/Aso.jpg" id="Aso"> </img>
        <img class="draggable" draggable="true" src="pics/paru-paro.jpg" id="Paru-paro"> </img>
        <img class="draggable" draggable="true" src="pics/ibon.jpg" id="Ibon"> </img>
        </div>
        <div class="droppable-points">
            <div class="droppable" data-draggable-id="Aso"> <span> Aso </span> </div> 
            <div class="droppable" data-draggable-id="Paru-paro"> <span> Paru-paro </span> </div>
            <div class="droppable" data-draggable-id="Ibon"> <span> Ibon </span> </div>
        </div>  
        <div class="score-indicator">
      <span id="correctCount">0</span> 
        <span id="wrongCount">0</span>
    </div>
    <br>
        <div class="sunod-tanong-btn">
        <button id="btn" type="button" class="btn" onclick="sunod()"> ISAVE </button>
   
      </div>
  </div>
  
  <form action=".php" class="results" id="formData" method="POST" onsubmit="saveQuizResults()">
        <div class="result-box custom-box hide">
            <h1> Mga resulta ng pagsusulit </h1>
            <table>
                  <tr>
                      <td> <label for="tamangSagot"> Tamang Sagot </label> </td>
                      <td><span class="tamangSagot" id="correctCountDisplay">0</span></td>
                  </tr>
                  <tr>
                      <td> <label for="malingSagot"> Maling Sagot </label> </td>
                      <td><span class="malingSagot" id="wrongCountDisplay">0</span></td>
                  </tr>
                    <td> <span for="total"> Kabuoang Tama</label></td>
                    <td><span class="total" id="totalDisplay" type="hidden" <?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?> name="tanka" id="quizResultsInput"></span></td>
                </tr>
            </table>
            <button type="button" class="btn" onclick="tryAgain()"> Subukan Ulit </button>
            <button type="button" class="btn" onclick="backHome()"> Home </button>
            <button type="submit" class="btn" onclick="submit()"> Save </button>  
        </div>
        </form>
  

<!-- <script src="js/images.js"></script> -->
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

function getNewQuestion(){
  dropNumber.innerHTML = "Tanong " + (questionCounter + 1) + " hanggang " + containerBox;
}


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
});
});


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

function tryAgain(){
    // hide the resultBox
    resultBox.classList.add("hide");
    // show the quizBox
    container.classList.remove("hide");
    resetQuiz();
    simulaQuiz()

}

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