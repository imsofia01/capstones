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
            <li><a href="#">HOME</a></li>
            <li><a href="#">2D VIDEO & ASSESSMENT</a></li>
            <li><a href="#">LEADERBOARD</a></li>
            <li><a href="#">ABOUT US</a></li>
        </ul>
    </div>

<div class="container">
    <div class="content">
    <h1> Maligayang Bati Mga Bata</h1>
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