<?php
	session_start();
	if ($_SESSION['sesh'] != true) {
		header("Location: login.php");
	}
?>
