<?php
session_start();

for ($i=0; $i < count($_SESSION['favorites_books']); $i++) {
  array_push($_SESSION['cart_books'],$_SESSION['favorites_books'][$i]);
}
unset($_SESSION['favorites_books']);
require_once 'edit_server_cart.php';
echo count($_SESSION['cart_books']);

 ?>
