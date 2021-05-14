<?php
	session_start();

	require "../include/connect.php";

	if($_POST["Title"] != null && $_POST["Text"] != null)
	{
		// Laddar upp inlägg
		$sql = "INSERT INTO posts(User, Titel, Text) VALUE (?,?,?)";
		$res = $dbh -> prepare($sql);
		$res -> bind_param("sss", $_SESSION['Username'], $_POST['Title'], $_POST['Text']);
		$res -> execute();
		header('Location: index.php');
	}
	
	else
	{
		header('Location: post.php');
	}

?>