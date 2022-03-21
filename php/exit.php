<?php

	require_once 'edit_server_cart.php';
	setcookie('user', $user['email'], time() - 3600, "/");
	session_start();
	session_unset();
	header('Location: ../index.php');
?>
