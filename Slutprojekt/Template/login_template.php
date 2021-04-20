<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title> Logga in </title>
		<link rel="stylesheet" href="css/stilmall.css">
		<link rel="shortcut icon" type ="image/png" href="Bild/favicon-32x32.png"/>
	</head>
	<body>
		<?php
			require "menu.php";
		?>
	
		<form action="login2.php" method="post">
			<p><label for="user">Användarnamn:</label>
			<input type="text" id="user" name="username"></p>
			<p><label for="pwd">Lösenord:</label>
			<input type="password" id="pwd" name="password"></p>
			<p>
				<a href="createUser.php">
					Skapa användare			</a>
				<input type="submit" value="Logga in">
			</p>
		</form>
		
		
		<?php 
			require "footer.php";
		?>
	</body>
</html>