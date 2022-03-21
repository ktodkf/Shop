<?php
session_start();
$_SESSION['cart_books'] = array();
require_once 'edit_server_cart.php';
if (count($_SESSION['cart_books'] == 0)) {
  echo $_GET['text'];
}
else {
  echo "BRUUUH";
}
 ?>
