<?php
	$logout_button="";
	$post_button = "";
	$login_button = "";
	if(isset($_SESSION['Status']))
	{
		$post_button = "<a href='post.php'>Skriv inlägg</a>";
		$login_button = "Info";
		$logout_button = "<a href='logout.php'>Logga ut</a>";
	}
	else
	{
		$login_button = "Logga in";
	}
?>
<nav>
	<a href="index.php">Start</a>
	<?php  
		echo $post_button;
		echo "<a href='login.php'>$login_button</a>";
		echo $logout_button;
	?>
</nav>