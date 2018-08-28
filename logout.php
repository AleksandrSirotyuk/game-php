<?php 
	session_start();
	require 'db.php';
	unset($_SESSION["logged_player"]);
	header("Location: /");
?>