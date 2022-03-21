<?php
session_start();
$_SESSION['favorites_books'] = array();
require_once 'edit_server_cart.php';
if (count($_SESSION['favorites_books'] == 0)) {
  echo $_GET['text'];
}
else {
  echo "BRUUUH";
}
 ?>
