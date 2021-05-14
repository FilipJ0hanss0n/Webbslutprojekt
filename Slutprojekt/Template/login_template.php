<?php
	$str = "";
	
	if(isset($_GET['status'])){
		if($_GET['status']==3){
			$str="Felaktig användare";
		}
		elseif($_GET['status']==4){
			$str="Felaktigt lösenord";
		}
	}
	
	// Kollar ifall man är inloggad
	if(isset($_SESSION['Status']))
	{
		$str ="<div><p>Välkommen!</p>
		<p>Användarnamn: {$_SESSION['Username']}</p>
		<p>Email: {$_SESSION['Email']}</p>";
		
		// ADMIN
		if($_SESSION['Status'] == 2)
		{
			$str .= "<p>ADMIN KONTO</p>";
		}
		
		$str .= "<a href=\"update.php\">Uppdatera uppgifter</a>
		</div>";
	}
	
	// Form för login
	else
	{
		$str .= <<<FORM
		<form action="login2.php" method="post">
			<p><label for="Username">Användarnamn:</label>
			<input type="text" id="Username" name="Username"></p>
			<p><label for="Password">Lössenord:</label>
			<input type="password" id="Password" name="Password"></p>
			<p>
				<input type="submit" value="Logga in">
				<a href="createUser.php">
					Skapa användare
				</a>
			</p>
		</form>
FORM;
	}
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Logga in</title>
		<link rel="stylesheet" href="css/stilmall.css">
		<link rel="shortcut icon" type ="image/png" href="Bild/favicon-32x32.png"/>
	</head>
	<body>
		<?php
			require "menu.php";
		?>
		
		<?php
			echo $str;
		?>
	
		<?php
			
			require "footer.php";
		?>
	</body>
</html>