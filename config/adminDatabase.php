<?php   

    $servername = "localhost";  
    $username = "root";  
    $password = ""; 
    $database = "sign_up"; 
   
     // Create a connection  
     $conn = mysqli_connect($servername,  
         $username, $password, $database); 

         $sql = "SELECT username, password, cpassword, email, FROM sign_up";
         $result = mysqli_query($conn, $sql);
   
    if($conn) { 
        echo "success";  
    }  
    else { 
        die("Error". mysqli_connect_error());  
    }  
?> 