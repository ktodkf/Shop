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

    </head>
    <body>
            <?php require_once 'php/header.php'; ?>
        <h1 class="our_book">Наши контакты</h1>
        <div class="background_grey"></div>
        <div class="background_white"></div>
                <footer>
        <div class="footer" id="footer_us">
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
