<?php
error_reporting(0);
session_start();
if ($_SESSION['user']) {
  $link = mysqli_connect("localhost", "root", "", "library");

  $userCart = serialize($_SESSION['cart_books']);
  $userfav = serialize($_SESSION['favorites_books']);
  $result = mysqli_query($link,"UPDATE `users` SET user_cart = ('$userCart') WHERE id_users = ".$_SESSION['id_user']."");
  $result2 = mysqli_query($link,"UPDATE `users` SET user_fav = ('$userfav') WHERE id_users = ".$_SESSION['id_user']."");
  if ($result == false || $result2 == false) {
    $_SESSION['message_from_reg'] = 'Не удалось записать данные';
    // echo $userCart;
  }
}
 ?>
