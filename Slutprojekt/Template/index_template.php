<?php
	require "../include/connect.php";
	
	$sql = "SELECT User, Titel, Text, ID FROM posts";
	$res = $dbh -> query($sql);
	
	$all_posts = array();
	
	$str = "<hr>";
	
	$index = 0;
	
	// Raderar inlägg
	if(isset($_GET['ID']))
	{
		$id = $_GET['ID'];
		$sql = "DELETE FROM posts WHERE Id=$id";
		$temp = $dbh -> query($sql);
		
		header ("Location: index.php");
	}
	
	// Vänder arrayn
	While($row = $res -> fetch_assoc())
	{
		array_push($all_posts, $row);
		
		$index++;
	}
	
	$temp = array();
	
	// Skriver inlägg
	for($i = $index - 1; $i >= 0; $i--)
	{
		$temp = $all_posts[$i];
		$str .= "
			<article>
				<h2>{$temp['Titel']}</h2>
				<p>{$temp['Text']}</p>
				<p>Skriven av: {$temp['User']} || inlägg:{$temp['ID']}</p>
			</article>
			";
		// Radera knapp för admin
		if(isset($_SESSION['Status']) && $_SESSION['Status'] == 2)
		{
			$str .= "<a href='index.php?ID={$temp['ID']}'>Ta bort</a>";
		}
		$str .= "<hr>";
	}
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="utf-8">
		<title>Katter</title>
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