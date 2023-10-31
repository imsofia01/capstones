<?php

  require_once('config/database.php');
  require_once('config/result.php');

  // Function to get names based on search query
  function getNamesBySearch($conn, $searchQuery) {
  $escapedSearchQuery = mysqli_real_escape_string($conn, $searchQuery);
  $query = "SELECT * FROM names WHERE username LIKE '%$searchQuery%'";
  $result = mysqli_query($conn, $query);
  return $result;

  if(isset($_POST['search'])) {
    $searchQuery = $_POST['search'];
    $result = getNamesBySearch($conn, $searchQuery);

    while ($row = mysqli_fetch_assoc($result)) {
        // Generate table rows using the retrieved data
    }
} else {
    $query = "SELECT * FROM names";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        // Generate table rows using the retrieved data
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Document</title>
    <link rel="stylesheet" href="./css/tableAlpabeto.css">
</head>
<script src="js/search.js"></script>
<script src="js/adminSearch.js"></script>
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

     
        
        <main class="table">
        <section class="table__header">
        <h1> TALAAN NG NANGUNGUNA</h1>
            <div class="input-group">
                <input type="search" name ="search" id="search"<?php echo isset($searchQuery) ? $searchQuery : ''; ?> placeholder="Search Data...">
               
            </div>
            <div class="export__file">
                
              
                <div class="export__file-options">
              
                </div>
            </div>
        </section>
        <form action="adminDelete.php" method="post">
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Tanggalin </button>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                    <th> alisin </th>
                    <th> Pangalan </th>
                    <th> Guro </th>
                    <th> petsa </th>
                    <th> Bilang ng Tanong </th>
                    <th> Tamang sagot </th>
                    <th>Maling sagot </th>
                    <th>Percentage </th>
                    <th>Puntos </th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                    </tr> 
      <tr>
    <?php
      $query = "SELECT * FROM names ORDER BY puntos DESC"; // Ordering by 'puntos' column in descending order
      $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) 
        {
      ?>
    <td> <input type="checkbox" value="<?php echo $row['id']; ?>" name="id[]"> </td>
    <td > <?php echo $row['username'];?> </td>
    <td > <?php echo $row['guro'];?> </td>
    <td> <?php echo $row['petsa'];?> </td>
    <td> <?php echo $row['total_tanong'];?> </td>
    <td> <?php echo $row['total_correct'];?> </td>
    <td> <?php echo $row['total_wrong'];?> </td>
    <td> <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $row['percentage']; ?>%;" aria-valuenow="<?php echo $row['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $row['percentage']; ?>%</div>
            </div> </td>
    <td> <?php echo $row['puntos'];?> </td>
    
    
  
                  
    </tr>  
    <?php                    
    }
            
  ?> 
</table>
        </section>
    </main>
        
    </div>
    </div>

    </div>

    <script>
        let subMenu = document.getElementById("subMenu");
      
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