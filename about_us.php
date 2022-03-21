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
        <script src="js/map.js"></script>

    </head>
    <body>
    <?php require_once 'php/header.php'; ?>
        <h1 class="our_book">О нас</h1>
        <div class="background_grey"></div>
        <div><img class="girl_img" src="images/girl_read.jpg"></div>
        <img src="images/book.jpg" class="book_img">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d70216.85558646268!2d47.82970024201349!3d56.63510779763531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415994cee334e033%3A0xdaebce5764135883!2z0JnQvtGI0LrQsNGALdCe0LvQsCwg0KDQtdGB0L8uINCc0LDRgNC40Lkg0K3Quw!5e0!3m2!1sru!2sru!4v1641754933964!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <footer>
        <div class="footer">
            <div >
                <p class="list_footer_name">Издательство "Книжный червь"</p>
                <div>
                    <li class="list_footer">Адрес: Республика Марий Эл,</li>
                    <li class="list_footer">город Йошкар-Ола</li>
                    <li class="list_footer">test@my.com</li>
                    <li class="list_footer">12345678910</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name">Магазин</p>
                <div>
                    <li class="list_footer">Часто задаваемые вопросы</li>
                    <li class="list_footer">Обмен и возврат</li>
                    <li class="list_footer">Способы оплаты</li>
                    <li class="list_footer">Доставка</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name">Социальные сети</p>
                <div>
                    <li class="list_footer">Facebook</li>
                    <li class="list_footer">Twitter</li>
                    <li class="list_footer">Instagram</li>
                    <li class="list_footer">Pinterest</li>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
