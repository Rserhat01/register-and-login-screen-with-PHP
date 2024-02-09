<?php 
require_once 'baglan.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans">
	<title>Sign Up</title>
</head>
<body>


	<form class="kayit" action="kayit.php" method="POST">
		<h1>Sign Up</h1>

		<br>
		<label for="name">Name</label>
		<input type="text" name="name" required> 

		<label for="sname">Surname</label>
		<input type="text" name="sname" required>

		<label for="user">Username</label>
		<input type="text" name="user" required>

		<label for="pass">Password</label>
		<input type="password" name="pass" required>

		<label for="cpass">Password Confirm</label>
		<input type="password" name="cpass" required>

		<button type="submit" name="kayit">Sign Up</button>
	</form>
	<a href="index.php"><button class="bg_red">Sign In</button></a>
</body>
</html>