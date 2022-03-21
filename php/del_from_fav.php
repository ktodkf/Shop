<?php
session_start();
// echo $_GET['text'];
unset($_SESSION['favorites_books'][$_GET['text']]);
sort($_SESSION['favorites_books']);
require_once 'edit_server_cart.php';

 ?>
