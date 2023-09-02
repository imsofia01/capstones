<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/about-us.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tungkol sa Developer </title>
 
</head>

<body>
<div class="toggle">
        <a><i class="fa fa-bars"></i></a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="videos.php">2D VIDEO & ASSESSMENT</a></li>
            <li><a href="#">LEADERBOARD</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
        </ul>
    </div>
   



  <section class="about-us">

    <div class="about">
      <img id="myImg" src="./pics/07007892.jpg" class="pic" style="width:100%;max-width:300px">
      <div class="text">
        <h2>Tungkol Sakin</h2>
        <h5>SOFIA MARIE DELA CRUZ BOCALIG <span> Designer </span></h5>
          <p>Ako ay Bachelor of Science in Information Technology isang MULTIMEDIA at studyante ng Divine Word College of Legazpi sa Albay </p>
      
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
</div>
    </div>
        </div>
      </div>
    </div>
  </section>


  <section class="about-us">
    <div class="about">
      <!--<img src="girl.png" class="pic">-->
      <div class="text">
        <h2>Tungkol Sakin</h2>
        <h5>MYCAH JUNIE B. BOLOFER <span> Designer </span></h5>
          <p>Ako ay Bachelor of Science in Information Technology isang MULTIMEDIA at studyante ng Divine Word College of Legazpi sa Albay</p>
        <div class="data">
     
        </div>
      </div>
    </div>
  </section>
  
</body>
<script>

var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
       

    $(document).ready(function(){
            $('.toggle').click(function(){
                $('.menu').toggleClass('active');
            });
        });
    
    </script>
</html>