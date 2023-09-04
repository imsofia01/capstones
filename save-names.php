<?php
// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include_once "./config/database.php";
//   include "save-names.php";

if (isset($_POST['username'])  )
 {
    $username = $_POST['username'];
    $currentDate = date("Y-m-d"); // Get the current date and time

  


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
</head>
<body>
<div class="login-box" id="boxbox">
  <h2>PANGALAN</h2>
  <form action="multipleChoice.php" class="saveName" method="POST" id="nameForm">
    <div class="user-box">
        <input type="text" id="name" name="username" required="">
        <label for="username"> ILAGAY ANG PANGALAN </label>
    </div>

    <div id="output">
        <ul id="nameList"></ul>
    </div>
  
    <button type="submit" name="submit" onclick="hideLoginBox()" value="submit">
        Submit
    </button>
</form>
</div>








<script type="text/javascript">

        // document.addEventListener("DOMContentLoaded", function () {
        //     const nameForm = document.getElementById("nameForm");
        //     const nameInput = document.getElementById("name");
        //     const nameList = document.getElementById("nameList");

        //     nameForm.addEventListener("submit", function (e) {
        //         e.preventDefault();
        //         const name = nameInput.value;
        //         const currentDate = new Date().toLocaleString();

        //         // Create a new list item to display the name and date
        //         const listItem = document.createElement("li");
        //         listItem.textContent = `${name} - ${currentDate}`;

        //         // Append the new list item to the list
        //         nameList.appendChild(listItem);

        //         // Clear the input field
        //         nameInput.value = "";
        //     });
        // });


</script>

    
</body>
</html>
