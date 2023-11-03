<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        <div class="menu-icon" id="menuIcon" onclick="toggleWrapbar()">&#9776;
            
            
            <ul class="wrapbar" id="wrapbar">
              <li><a href="AdminDash.php">PROFILE</a></li>
                <li><a href="tableAlpabeto.php">ALPABETONG FILIPINO</a></li>
                <li><a href="tableMagagalang.php">MAGAGALANG NA PANANALITA</a></li>

            </ul>
            </div>
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


        <div class="custom-box">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img id="myImg" src="./pics/teacher.jpg" alt="Snow" style="width:200%;max-width:200px">
                        <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>
                            <div class="file btn btn-lg btn-primary">
                                Sarah Mae Dela Cruz
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Teacher Sarah
                                    </h5>
                                    <h6>
                                        Guro sa Filipino
                                    </h6>
                                 <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tungkol</a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                   
                </div>
                
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Guro Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>sarah123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pangalan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Sarah Mae Dela Cruz</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>delacruzsarah@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Bachelor of Science in Elementary Education</p>
                                            </div>
                                        </div>
                            </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

        <script>
// Get the modal
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
</script>
</div>




    <script>
        let subMenu = document.getElementById("subMenu");
        let menuIcon =document.getElementById("menuIcon");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }

        function toggleWrapbar() {
     var wrapbar = document.getElementById("wrapbar");
    if (wrapbar.style.display === "block") {
        wrapbar.style.display = "none";
    } else {
        wrapbar.style.display = "block";
    }
}


    </script>
</body>
</html>