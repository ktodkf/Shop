<!DOCTYPE html>
<html lang="en">
<?php
session_start();
error_reporting(0);
 ?>
<head>
    <meta charset="UTF-8" />
    <title class="title">Книжный червь | Книжный онлайн-магазин</title>
    <link rel="stylesheet"  href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="js/index.js"></script>
</head>

<body>
    <div class="container mt-4">
        <h1>Регистрация</h1>
        <p style="text-align:center;"> Вы уже зарегистрированы в нашем магазине?  <a href="login/login.php">Авторизоваться</a></p>
        <?php
        if ($_SESSION['message_from_reg']) {
          echo '<p style="text-align:center; color:#f00;">'.$_SESSION['message_from_reg'].'</p>';
          unset($_SESSION['message_from_reg']);
        }
         ?>
        <form method="post" action="php/up.php">
            <input type="text" class="form-control" name="email" id="email" placeholder="Введите почту"><br>
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <button class="btn btn-success" type="submit">Зарегистрироваться</button>
        </form>
    </div>
    <div style="position:absolute;top:10px;left:10px;">
      <a href="index.php">Назад на главную</a>
    </div>
</body>

</html>
