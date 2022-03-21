<?php
session_start();
$item = $_SESSION['favorites_books'][$_GET['text']];
unset($_SESSION['favorites_books'][$_GET['text']]);
sort($_SESSION['favorites_books']);
array_push($_SESSION['cart_books'],$item);
require_once 'edit_server_cart.php';
echo count($_SESSION['cart_books']);

 ?>
