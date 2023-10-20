<?php
// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include_once "./config/database.php";
//   include "save-names.php";

if (isset($_POST['username'])  )
 {
    $username = $_POST['username'];
    $currentDate = date("Y-m-d"); // Get the current date and time

  
  // Set a default value for total_tanong
  $total_tanong = 0;
  $total_correct = 0;
  $total_wrong = 0;
  $percentage = 0;
  $puntos = 0;


// Create the SQL INSERT query
$sql = "INSERT INTO names (username, petsa) VALUES ('$username', '$currentDate')";
$result = mysqli_query($conn,$sql);

if (!$result) {
  echo "Error inserting user information: " . mysqli_error($conn);
 } 

 }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <link rel="stylesheet" href="css/names.css">
    <title>Ilagay ang pangalan</title>
    <link rel="icon" type="image/x-icon" href="./pics/logo.png">
</head>
<body>
<div class="login-box" id="boxbox">
  <h2>PANGALAN</h2>
  <form action="multipleChoice.php" class="saveName" method="POST" id="nameForm">
    <div class="user-box">
        <input type="text" id="name" name="username" required="">
        <label for="username"> ILAGAY ANG PANGALAN </label>
    </div>

    <div class="user-box">
      <label for="selectName">Pumili ng Pangalan ng Guro:</label>
      <select id="selectName" name="selectedName">
        <option value="Option 1">Option 1</option>
        <option value="Option 2">Option 2</option>
        <option value="Option 3">Option 3</option>
        <!-- Add more options as needed -->
      </select>
    </div>

  
  
    <button type="submit" name="submit" onclick="hideLoginBox()" value="submit">
        Submit
    </button>
</form>
</div>








<script type="text/javascript">



</script>

    
</body>
</html>
