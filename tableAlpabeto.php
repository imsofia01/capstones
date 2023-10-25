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
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/tableAlpabeto.css">
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

<div id="mySidenav" class="sidenav">
  <a href="#" id="about">Profile</a>
  <a href="#" id="blog">Talaan ng Nangunguna</a>
  <a href="#" id="projects">Projects</a>
  <a href="#" id="contact">Contact</a>
</div>

<div style="margin-left:90px;">
  <h2>Hoverable Sidenav Buttons</h2>
  <p>Hover over the buttons in the left side navigation to open them.</p>
</div>


   
</body>
</html> 

