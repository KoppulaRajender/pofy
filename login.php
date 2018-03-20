<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['rollno'])){

		$rollno = stripslashes($_REQUEST['rollno']); // removes backslashes
		$rollno = mysqli_real_escape_string($con,$rollno); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE rollno='$rollno' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['rollno'] = $rollno;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>rollno/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }
						else{
?>
<div class="form">
<h1>user Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="rollno" placeholder="rollno" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />
</div>

<?php

 }

?>


</body>
</html>
