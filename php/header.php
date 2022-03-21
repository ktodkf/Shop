<?php
error_reporting(0);
echo '<header id="navigation" name="navigation">
   <div class="logo">
        <a href="index.php"><img src="images/book_cherv.png" class="logo_img"></a>
   </div>

    <div style="display: flex;" class="header_menu">
        <li class="list"><a href="catalog.php" class="shop"> Магазин</a></li>
        <li class="list"><a href="about_us.php" class="about_us"> О нас</a> </li>
        <li class="list"><a href="contact.php" class="contact"> Контакты</a> </li>
        <li class="list"><a href="shopping_cart.php" class="cart"> Корзина</a> </li>';
        if (!$_SESSION['user']) {
          echo '<button class="list_button"><a href="login/login.php" class="entry_link" >Авторизация</a></button>';
        }
        else {
          // echo '<p>Вы  - '.$_SESSION['user'].'</p>';
          echo '
          <div class="profile">
          <img src="images/pfofile_icon.svg">
            <div class="profile_info">
              <p style="font-size:13px; text-align:center;">Вы  - '.$_SESSION['user'].'</p>
              <p style="text-align:center;cursor:pointer;" onclick="window.location.href='."'favorites.php'".';">Избранное</p>
              <div class="exit_block">
              <hr>
              <p style="color:rgba(255,0,0,0.7);text-align:center; cursor:pointer;" onclick="window.location.href='."'php/exit.php'".';" >Выход</p>
                </div>';
              if ($_SESSION['favorites_books']) {
                echo '<div id="fav_counter_id" class="cart_counter">
                '.count($_SESSION['favorites_books']).'
                </div>';
              }
              echo '
            </div>
          </div>
          ';
        }
        if ($_SESSION['cart_books']) {
          echo '<div id="cart_counter_id" class="cart_counter">
          '.count($_SESSION['cart_books']).'
          </div>';
        }
        echo '
    </div>

</header>';
 ?>
