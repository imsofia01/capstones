<?php
// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {



if (isset($_POST['pangalan'])  )
 {
    $username = $_POST['pangalan'];
    $selectedName = $_POST['guro'];
    $currentDate = date("Y-m-d"); // Get the current date and time


// Create the SQL INSERT query
$sql = "INSERT INTO drag_img (pangalan, guro, petsa) VALUES ('$username', '$selectedName', '$currentDate')";
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
  <form action="sampleD.php" class="saveName" method="POST" id="nameForm">
    <div class="user-box">
        <input type="text" id="name" name="pangalan" required="">
        <label for="pangalan"> ILAGAY ANG PANGALAN </label>
    </div>

    <div class="user-box">
      <label for="guro">Piliin ang Pangalan ng Guro:</label>
      <select id="selectName" name="guro">
        <option value="Teacher Sarah">Teacher Sarah</option>
        <option value="Teacher Rose">Teacher Rose</option>
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
