<?php
	$dbh = new mysqli("localhost", "dbUser", "hej123", "databas");
	
	if(!$dbh){
		echo "Ingen kontakt med databasen";
		exit;
	}
?>