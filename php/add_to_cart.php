<?php
  session_start();

  if (!$_SESSION['cart_books']) {
    $_SESSION['cart_books'] = array();
  }

  array_push($_SESSION['cart_books'], $_GET['text']);

  require_once 'edit_server_cart.php';

  echo count($_SESSION['cart_books']);


 ?>
