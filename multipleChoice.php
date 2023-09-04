<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

include 'config/database.php';
ob_start();
include 'save-names.php';
ob_end_clean();

$sql = "SELECT * FROM `names`";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="css/choices.css">
    <title>Document</title>
</head>
<body>
    
    <div class="home-box custom-box">
        <h1><?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>!</h1>
        <br>
        <h2> Pagsusulit  </h2>
        <p> Bilang ng mga Tanong: <span class="tanong"> </span></p>
        <button type="button" class="btn" onclick="simulaQuiz()"> Simula </button>
    </div>

         
    <div class="assess-box custom-box hide">
        <div class="tanong-bilang">
            
        </div>
        <div class="tanong-text">
            
        </div>
        <div class="option-container">
          
        </div>
        <div class="sunod-tanong-btn">
            <button type="button" class="btn" onclick="sunod()"> Sunod </button>
        </div>
        
        <div class="sagot-indicator">
          
        </div>
    </div>

        <!-- resulta ng pagsusulit -->
        <form action="quizresult.php" class="results" id="formData" method="POST" onsubmit="saveQuizResults()">
        <div class="result-box custom-box hide">
            <h1> Mga resulta ng pagsusulit </h1>
            <table>
                <tr>
                    <td> <label for="total_tanong"> Bilang ng Tanong </label> </td>
                    <td><span class="total-tanong" type="hidden" <?php echo isset($_POST['totalTanong']) ? htmlspecialchars($_POST['totalTanong']) : ''; ?> name="total_tanong" id="quizResultsInput"></span> </td>
                </tr>
                <tr>
                    <td> <span for="total_attempts"> Tangka</label></td>
                    <td><span class="total-attempt" type="hidden" <?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?> name="tanka" id="quizResultsInput"></span></td>
                    
                </tr>
                <tr>
                    <td> <span for="total_correct"> Tamang sagot</label> </td>
                    <td><span class="total-correct" type="hidden"  name="quiz_results" id="quizResultsInput"></span></td>
                    
                </tr>
                <tr>
                    <td> <label for="total_wrong"> Maling sagot </label>  </td>
                    <td><span class="total-wrong" type="hidden"  name="quiz_results" id="quizResultsInput"></span> </td>
                    
                </tr>
                <tr>
                    <td> <label for="percentage"> Percentage </label> </td>
                    <td><span class="percentage" type="hidden"  name="quiz_results" id="quizResultsInput"></span> </td>
                    
                </tr>
                <tr>
                    <td> Kabuuang sagot </td>
                    <td><span class="total-puntos" type="hidden"  name="quiz_results" id="quizResultsInput"></span></td>
                    
                </tr> 
            </table>
            <button type="button" class="btn" onclick="tryAgain()"> Subukan Ulit </button>
            <button type="button" class="btn" onclick="backHome()"> Home </button>
            <button type="submit" class="btn" onclick="submit()"> Save </button>  
        </div>
        </form>
      
      
<script src="js/script.js"></script>

<script> 

const tanongNumber = document.querySelector(".tanong-bilang");
const tanongText = document.querySelector(".tanong-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".sagot-indicator");
const homeBox = document.querySelector(".home-box");
const PlayerName = document.querySelector(".playerName-box");
const quizBox = document.querySelector(".assess-box");
const resultBox = document.querySelector(".result-box");
const result = document.querySelector(".results");


let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOption = [];
let correctAnswers = 0;
let attempts = 0;

// push the questions into availableQuestions Array
function setAvailableQuestions(){
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++) {
        availableQuestions.push(quiz[i])
    }
}

// set question number and question and options
function getNewQuestion(){
    //iset ang tanong number
    tanongNumber.innerHTML = "Tanong " + (questionCounter +  1) + " hanggang " + quiz.length;

    //iset ang tanong text

    // kunin ang random na tanong
    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)];
    currentQuestion = questionIndex;
    tanongText.innerHTML = currentQuestion.q;
    // console.log(questionIndex)
    // get the position ng 'questionIndex' sa availableQuestions Array;
    const index1 = availableQuestions.indexOf(questionIndex);
        // remove the 'questionIndex' sa availableQuestions Array; para hindi mag repeat yung questions
        availableQuestions.splice(index1,1);
        // console.log(questionIndex)
        //console.log(availableQuestions)

        //set options
        // get the length of option "inshort get the sagot"
        const optionLen = currentQuestion.option.length
         //to push the  option sa availableQuestions Array  
        for(let i=0; i<optionLen; i++){
            availableOption.push(i)
            }   
            
            optionContainer.innerHTML = '';
            let animationDelay = 0.15;
           
           
           
            // create option in html
            for(let i=0; i<optionLen; i++){

                
                //random option
                const optionIndex = availableOption[Math.floor(Math.random() * availableOption.length)];
                // kunin ang position ng 'optionIndex' galing sa availableOtion Array
                const index2 = availableOption.indexOf(optionIndex);
                // remove the optionIndex' galing sa availableOtion Array, para hindi mag repeat yung option
                availableOption.splice(index2,1);
                //console.log(optionIndex)
                
                const option = document.createElement("div");
                option.innerHTML = currentQuestion.option[optionIndex];
                option.id  = optionIndex;
                option.style.animationDelay =animationDelay + 's';
                animationDelay = animationDelay + 0.15;
                option.className = 'option';
                optionContainer.appendChild(option)
                option.setAttribute("onclick", "getResult(this)");
            }

            questionCounter++

        }

        //get the result of current attempt question
    function getResult(element) {
        const id = parseInt(element.id);
        // get the answer by comparing the id clicked option
        if(id === currentQuestion.answer){
            // set the green color to the correct option
            element.classList.add("tama"); 
            // add the indicator to tama mark
            updateAnswerIndicator("tama"); 
            correctAnswers++;
            console.log("tama:"+ correctAnswers);      
            // console.log("TAMA!");
            element.innerHTML = "Tama";
             
        }
        else{
            // set the color red for the wrong option
            element.classList.add("mali");
              // add the indicator to mali mark
              updateAnswerIndicator("mali");  
             // Display "Mali" in the UI
            element.innerHTML = "Mali";
        //    console.log("MALI");

           //if the is incorrect the mali the show correct option by adding green color the correct option
           const optionLen = optionContainer.children.length;
            for(let i=0; i<optionLen; i++){
                if(parseInt(optionContainer.children[i].id) === currentQuestion.answer){
                    optionContainer.children[i].classList.add("tama");
                }
            }     
        }
        attempts++;
        // Display "Tama" or "Mali" in the UI
    element.innerHTML = id === currentQuestion.answer ? "Tama" : "Mali";
        unclickableOption();
    }

// make all the option unclickable once the user select a option (RESTRICT THE USER TO CHANGE THE OPTION)
function unclickableOption(){
    const optionLen = optionContainer.children.length;
    for(let i=0; i<optionLen; i++ ){
        optionContainer.children[i].classList.add("nakasagot-kana");
    }
}

function answersIndicator(){
    answersIndicatorContainer.innerHTML = '';
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++){
        const indicator =document.createElement("div");
        answersIndicatorContainer.appendChild(indicator);
    }
}

function updateAnswerIndicator(markType){
    answersIndicatorContainer.children[questionCounter-1].classList.add(markType)
}

function sunod(){
    if(questionCounter === quiz.length){
        console.log("Good Job!")
        quizOver();
    }
    else{
        getNewQuestion();
    }
}

function quizOver(){
   // hide quiz quiz
   quizBox.classList.add("hide");
   //show result box
   resultBox.classList.remove("hide");
   quizResult();

   const quizResults = quizResult();
    document.getElementById("quizResultsInput").value = JSON.stringify(quizResults);
}



//get the quiz result
function quizResult(){


    
    resultBox.querySelector(".total-tanong").innerHTML = quiz.length;
    resultBox.querySelector(".total-attempt").innerHTML = attempts;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML = attempts - correctAnswers;
    const percentage = (correctAnswers/quiz.length)*100;
    resultBox.querySelector(".percentage").innerHTML =  percentage.toFixed() + "%";
    resultBox.querySelector(".total-puntos").innerHTML = correctAnswers +"/" + quiz.length; 

    return {
        totalTanong: quiz.length,
        totalAttempt: attempts,
        totalCorrect: correctAnswers,
        totalWrong: attempts - correctAnswers,
        percentage: percentage.toFixed(),
        totalPuntos: correctAnswers + "/" + quiz.length
    };
}   

// Inside your existing code
function saveQuizResults() {
    const quizResults = quizResult();
    document.getElementById("quizResultsInput").value = JSON.stringify(quizResults);

    // Send quiz results to the server using AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "save_results.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.responseText); // You can handle the server's response here
                // You can handle the server's response here
              
            } else {
                console.error("Error saving quiz results");
            }
        }
    };
    
    const formData = `quizResults=${JSON.stringify(quizResults)}`;
    xhr.send(formData);
}



function resetQuiz() {
    questionCounter = 0;
    correctAnswers = 0;
    attempts = 0;
}

function next() {
     // hide the PlayerNameBox
    PlayerName.classList.add("hide");
    // show the Home-Box
    homeBox.classList.remove("hide");
}
    

function tryAgain(){
    // hide the resultBox
    resultBox.classList.add("hide");
    // show the quizBox
    quizBox.classList.remove("hide");
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

// STARTING POINT //

function simulaQuiz() {

    // HIDE HOME BOX 
        homeBox.classList.add("hide");
        // show quiz box
        quizBox.classList.remove("hide");

    // setting all questions in availableQuestions Array
    setAvailableQuestions();

    // call getNewQuestion(); function
    getNewQuestion();
    // to create indicator of answer
    answersIndicator();
}

window.onload =function (){
    homeBox.querySelector(".tanong").innerHTML = quiz.length;
}






</script>

</body>
</html>