<?php
	
	
	$str = "";
	
	if($_SESSION['status'] == 1)
	{
		
	}
	
	else
	{
		echo $str;
		$str.=<<<FORM
			<form action="{$_SERVER['PHP_SELF']}" method="post">
				<p><label for="Username">Användarnamn:</label>
				<input type="text" id="Username" name="Username"></p>
				<p><label for="Email">Email:</label>
				<input type="email" id="Email" name="Email"></p>
				<p><label for="Password">Lösenord:</label>
				<input type="password" id="Password" name="Password"></p>
				<p><input type="submit" value="Skapa användare"></p>
			</form>
FORM;
	}

?>

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
			<p><label for="Username">Användarnamn:</label>
			<input type="text" id="Username" name="Username"></p>
			<p><label for="Password">Lösenord:</label>
			<input type="password" id="Password" name="Password"></p>
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