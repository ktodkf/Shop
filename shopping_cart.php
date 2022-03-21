<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title class="title">Книжный червь | Книжный онлайн-магазин</title>
        <link rel="stylesheet" type="text/css" href="style/style_main.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
        <script src="js/index.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
            <?php require_once 'php/header.php'; ?>
        <h1 class="our_book">Корзина</h1>
        <?php

        if ($_SESSION['cart_books']) {
          $link = mysqli_connect("localhost", "root", "", "library");
          // print_r($_SESSION['cart_books']);
          for ($i=0; $i < count($_SESSION['cart_books']); $i++) {
            $idBook = $_SESSION['cart_books'][$i];
            $row = mysqli_fetch_assoc(mysqli_query($link,'SELECT * FROM `books` WHERE id_book = '.$idBook.''));
            $orderPrice += $row['cost'];
          }
          echo '<div class="cart_block">
              <div class="cart_info">
                <div class="cart_info_item cart_count_goods">
                  <p>Кол-во товаров в корзине:  </p><span>'.count($_SESSION['cart_books']).'</span>
                </div>
                <div class="cart_info_item cart_count_price">
                  <p>Общая стоимость:</p><span>'.$orderPrice.' руб.</span>
                </div>
                <div class="cart_info_item clear_cart" onclick="ClearCart()">
                  <img src="images/exit.svg" alt="">
                  <p>Очистить корзину</p>
                </div>
                <div class="cart_info_item order_cart">
                  <p>Оформить заказ</p>
                </div>
              </div>
              <hr>
              <div class="cart_list">
                <table>
                  <tbody>
                    <tr class="cart_table_info">
                      <td> Товар </td>
                      <td>Наименование</td>
                      <td>Цена</td>
                      <td></td>
                    </tr>
                    ';
                    for ($i=0; $i < count($_SESSION['cart_books']); $i++) {
                      $idBook = $_SESSION['cart_books'][$i];
                      $row = mysqli_fetch_assoc(mysqli_query($link,'SELECT * FROM `books` WHERE id_book = '.$idBook.''));
                    echo '<tr class="cart_row">
                      <td class="cart_img"> <img src="books_image/'.$row['image'].'.jpg" alt=""> </td>
                      <td class="cart_good_name">'.$row['title'].'</td>
                      <td class="cart_good_price">'.$row['cost'].' руб.</td>
                      <td id="'.$i.'" onclick="delFromCart()" class="cart_good_delete_btn"><img id="'.$i.'" src="images/exit.svg" alt=""> <p id="'.$i.'">Удалить товар</p> </td>
                    </tr>';
                    }
                   echo  '
                  </tbody>
                </table>
              </div>
          </div>';
        }
        else {
          echo '<p style="text-align:center;">Ваша корзина пуста, передийте в магазин для выбора товаров: <a href="catalog.php">Магазин</a></p>';
        }
         ?>

</body>
</html>
