<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    <title>Tuklas-KO!</title>
</head>
<body>
<div class="toggle">
        <a><i class="fa fa-bars"></i></a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="videos.php">2D VIDEO & ASSESSMENT</a></li>
            <li><a href="quizresult.php">LEADERBOARD</a></li>
            <li><a href="about-us.php">ABOUT US</a></li>
        </ul>
    </div>
   


<div class="div-1">
    
    <h1> Maligayang Bati Mga Bata</h1>
    <p> The 2D Interactive learning and Assessment Application for Kindergarten Pupils will help the children to understand some Filipino words
    that they difficult to understand.
</p>
</div>
<div class="div-2"></div>




</body>
<script>
    $(document).ready(function(){
            $('.toggle').click(function(){
                $('.menu').toggleClass('active');
            });
        });
    </script>
</html>