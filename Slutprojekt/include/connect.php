<?php
$dbh = new mysqli("localhost" "DbUser", "hej123", "databas");

if(!$dbh)
{
	echo "Ingen kontakt med databasen";
	exit;
}

?>