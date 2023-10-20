<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "./config/adminDatabase.php";

    if (isset($_POST['login_submit'])) {
    // Login form submission
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];

    // Add proper validation and security measures here

    // Check if the user exists in the database
    // You should use prepared statements for security
    $query = "SELECT * FROM sign_up WHERE username = '$login_username' AND password = '$login_password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // User is authenticated, redirect to a secure page
        header("Location: AdminDash.php");
    } else {
        // Authentication failed, display an error message
        echo "Login failed. Please check your username and password.";
    }
}

if (isset($_POST['signup_submit'])) {
    // Sign-up form submission
    $signup_username = $_POST['signup_username'];
    $signup_password = $_POST['signup_password'];
    $signup_cpassword = $_POST['signup_cpassword'];
    $signup_email = $_POST['signup_email'];

    // Add proper validation and security measures here

    // Insert user data into the database
    // You should use prepared statements for security
    $insert_query = "INSERT INTO sign_up (username, password, cpassword, email) VALUES ('$signup_username', '$signup_password', '$signup_cpassword', '$signup_email')";
    
    if ($conn->query($insert_query) === true) {
        // Registration successful, you can redirect to a login page or display a success message
        echo "Registration successful. Please log in.";
    } else {
        // Registration failed, display an error message
        echo "Registration failed. Please try again.";
    }
}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Guro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/teacher.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
    
<div class="area" >
  
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

            <div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<div class="sign-in-htm">
					<form action="teacher.php" method="post">
						<div class="group">
							<label for="user" class="label">Username</label>
							<input id="user" type="text" name="login_username" class="input" required>
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input id="pass" type="password" name="login_password" class="input" data-type="password" required>
						</div>
						<div class="group">
							<input id="check" type="checkbox" class="check" checked>
							<label for="check"><span class="icon"></span> Keep me Signed in</label>
						</div>
						<div class="group">
							<input type="submit" name="login_submit" class="button" value="Sign In">
						</div>
					</form>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</div>

				<div class="sign-up-htm">
					<form action="teacher.php" method="post">
						<div class="group">
							<label for="username" class="label">Username</label>
							<input id="username" type="text" name="signup_username" class="input" required>
						</div>
						<div class="group">
							<label for="password" class="label">Password</label>
							<input id="password" type="password" name="signup_password" class="input" data-type="password" required>
						</div>
						<div class="group">
							<label for="cpassword" class="label">Repeat Password</label>
							<input id="cpassword" type="password" name="signup_cpassword" class="input" data-type="password" required>
						</div>
						<div class="group">
							<label for="email" class="label">Email Address</label>
							<input id="email" type="text" name="signup_email" class="input" required>
						</div>
						<div class="group">
							<input type="submit" name="signup_submit" class="button" value="Sign Up">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
				
	
</div>
</body>
</html>