<?php
session_start();
if (!$_SESSION['user']) {
  header('Location:index.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/style_main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <script src="js/index.js"></script>
    <meta charset="utf-8">
    <title>Избранное</title>
  </head>
  <body>
    <?php require_once 'php/header.php'; ?>
    <h1 class="our_book">Избранное</h1>
    <div class="favorites_block">
      <div class="favorites_info">
        <div class="favorites_block_item favorites_count">
          <p>Всего в избранном:</p><span><?php echo count($_SESSION['favorites_books']);?></span>
        </div>
        <div class="favorites_block_item clear_favorites" onclick="clearFavorites()">
          <img src="images/exit.svg" alt="">
          <p>Очистить избранное</p>
        </div>
        <div class="favorites_block_item favorites_add_to_cart" onclick="addFavToCart()">
          <p>Добавить все в корзину</p>
        </div>
      </div>
      <hr>
      <div class="favorites_list">
        <?php
        if ($_SESSION['favorites_books']) {
          $link = mysqli_connect("localhost", "root", "", "library");
          for ($i=0; $i < count($_SESSION['favorites_books']); $i++) {
            $idBook = $_SESSION['favorites_books'][$i];
            $row = mysqli_fetch_assoc(mysqli_query($link,'SELECT * FROM `books` WHERE id_book = '.$idBook.''));
          echo '<div class="favorites_list_item">
            <img src="books_image/'. $row['image'] .'.jpg" alt="">
            <h4 class="favorite_item_title">'. $row['title'] .'</h4>
            <p class="favorite_price">'. $row['cost'] .'руб.</p>
            <button type="button" name="button" class="favorites_add_to_cart" id="'. $i .'" onclick="add1FavToCart(event)">Добавить в корзину</button>
            <div class="del_from_fav" id="'. $i .'"> <img src="images/exit.svg" alt="" id="'. $i .'" onclick="delFromFavorites()"> </div>
          </div>';
          }
        }
        else {
          echo '<p style="text-align:center; margin-top:10px;">Тут ничего нет, передийте в магазин для выбора товаров: <a href="catalog.php">Магазин</a></p>';
        }

         ?>

      </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>
