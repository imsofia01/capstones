<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <title>Tuklas-KO!</title>
</head>
<body>

<div class="div-1">
<div class="main">
    <h2>TUKLASKO </h2>
  <h1>2D INTERACTIVE <div class="roller">
    <span id="rolltext">LEARNING &<br/>
    ASSESSMENT<br/>
    APPLICATION<br/>
    <span id="spare-time">for Kindergarten Pupils</span><br/>
    </div>
    </h1>
  </div>

    <a href="videos.php">
<button id="startButton"> ARALIN AT PAGSUSULIT </button>
</a>
<br>
<div class="dropdown">
  <button class="dropdown-button" id="startButton">TALAAN NG NAGUNGUNA</button>
  <div class="dropdown-content" >

  <a href="quizresult.php">
<button class="dropdown-button" id="startButton"> PATINIG </button>
</a>

    
    <br>
    
  <a href="dragResult.php">
<button class="dropdown-button" id="startButton"> KATINIG </button>
</a>
    
  </div>
</div>
</div>








</body>
<script>
    $(document).ready(function(){
            $('.toggle').click(function(){
                $('.menu').toggleClass('active');
            });
        });
    </script>
</html>