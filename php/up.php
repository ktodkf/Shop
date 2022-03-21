<?php
error_reporting(0);
session_start();
	$email= filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	if(mb_strlen($email) < 5 || mb_strlen($email) > 90) {
		$_SESSION['message_from_reg'] = "Недопустимая длина почты";

		header('Location:../signup.php');
	} else if (mb_strlen($login) < 3 || mb_strlen($login) > 50) {
		$_SESSION['message_from_reg'] = "Недопустимая длина имени";

		header('Location:../signup.php');

	} else if (mb_strlen($pass) > 6) {
		$_SESSION['message_from_reg'] = "Недопустимая длина пароля (от 6 символов)";

		header('Location:../signup.php');

	}
	else {
		$pass= md5($pass."ghjkl12dsgfhd34");

		$mysql = mysqli_connect('localhost', 'root', '', 'library');
		$result = mysqli_query($mysql,"INSERT INTO `users` (`email`, `login`, `pass`) VALUES('$email', '$login', '$pass')");
		$_SESSION['user'] = $login;
		$_SESSION['id_user'] = $user['id_users'];
		if ($result == false) {
			echo "Что-то пошло не так";
			echo '<br>';
			echo mysqli_error($mysql);
		}
		else {
			header('Location: ../index.php');
		}
		// $mysql->close();
	}


?>
