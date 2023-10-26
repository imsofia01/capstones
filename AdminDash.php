<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/dashy.css">
</head>
<body>

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


    <div class="hero">
        <nav>
            <img src="./pics/logo.png" class="logo">
            <ul>
                <li><a href="tableAlpabeto.php">ALPABETONG FILIPINO</a></li>
                <li><a href="Home">MAGAGALANG NA PANANALITA</a></li>
                <li><a href="profile.php">PROFILE</a></li>
               
               
            </ul>
            <img src="./pics/teacher.jpg" class="user-pic" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="./pics/teacher.jpg" class="user-pic">
                        <h2>Sarah Mae Dela Cruz</h2>
                    </div>
                    <hr>
                    

                    <a href="teacher.php" class="sub-menu-link">
                        <img src="./pics/logout.png">
                        <p>Log out</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>

</div>




    <script>
        let subMenu = document.getElementById("subMenu");
      
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
            

        }

    </script>
</body>
</html>