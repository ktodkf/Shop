<?php
session_start();

	$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$pass= md5($pass."ghjkl12dsgfhd34");


	$mysql = new mysqli('localhost', 'root', '', 'library');

	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();

	if(count((array)$user) == 0){
		$_SESSION['message_from_reg'] = "Такой пользователь не найден";

		header('Location: ../login/login.php');

	}

	else {
		// setcookie('user', $user['name'], time() + 3600, "/");
		$_SESSION['user'] = $login;
		$_SESSION['id_user'] = $user['id_users'];
		$_SESSION['cart_books'] = unserialize($user['user_cart']);
		$_SESSION['favorites_books'] = unserialize($user['user_fav']);
		$check = 0;
		$mysql->close();
		header('Location: ../index.php');
	}
?>
