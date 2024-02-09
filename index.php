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
	<title>LOGIN</title>
</head>
<body>

	<form action="islem.php" method="POST">
		<h1>LOGIN</h1>

		<br>

		<label for="user">Username</label>
		<input type="text" name="user">

		<label for="pass">Password</label>
		<input type="password" name="pass">

		<button type="submit" name="kontrol">Login</button>
	</form>
	<a href="sign_up.php"><button class="bg_red">Sign Up</button></a>

</body>
</html>