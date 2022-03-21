<?php
session_start();

if ($_SESSION['user']) {
  if (!$_SESSION['favorites_books']) {
    $_SESSION['favorites_books'] = array();
  }

  array_push($_SESSION['favorites_books'], $_GET['text']);

  require_once 'edit_server_cart.php';

  echo count($_SESSION['favorites_books']);
}
else {
  echo "false";
  $_SESSION['message_from_reg'] = 'Для добавления товаров в корзину необходимо авторизироваться';
}
 ?>
