<?php
session_start();
// echo $_GET['text'];
unset($_SESSION['cart_books'][$_GET['text']]);
sort($_SESSION['cart_books']);
require_once 'edit_server_cart.php';

 ?>
