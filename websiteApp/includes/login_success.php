<?php
	session_start();
 ?>

<header>
		<h3><?php

if (isset($_SESSION['email_signIn'])) {
	echo "<h3>welcome " . $_SESSION['email_signIn']."</h3>";
}

if (isset($_SESSION['name'])) {
	echo "<h3>welcome " . $_SESSION['name']."</h3>";
}



?></h3>
	</header>