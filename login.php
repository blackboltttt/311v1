<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
<style>
  		html{background: url('background.png') no-repeat center center fixed;
  		-webkit-background-size:cover;
  		-moz-background-size:cover;
  		-o-background-size:cover;
  		background-size:cover; }
  	</style>
 
</head>
<body>
 	
	<center><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required> <br> <br>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php

	if(isset($_POST['admin_login'])){
		header("Location: admin_login.php");
	}
	if(isset($_POST['student_login'])){
		header("Location: student_login.php");
	}
	?>
	</center>
</body>
</html>