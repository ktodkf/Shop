<?php
session_start();
// unset($_SESSION['user'])
 ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title class="title">Книжный червь | Книжный онлайн-магазин</title>
        <link rel="stylesheet" type="text/css" href="style/style_main.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    </head>
    <body>
          <?php require_once 'php/header.php'; ?>
        </div>
        <h1 class="our_book">Наши книги</h1>
        <div class="catalog_book">
            <div class="filter">
                <h3 class="filter_title">Фильтры</h3>
                <select class="filter_book">
                    <option disabled selected>Выберите жанр</option>
                      <?php
                        $link = mysqli_connect("localhost", "root", "", "library");
                        $ganre = mysqli_query($link,'SELECT * FROM `ganres`');
                        while ($row = mysqli_fetch_assoc($ganre)) {
                          echo '<option id='. $row['id_ganre'] .'>'. $row['name'] .'</option>';
                        }
                       ?>
                </select>
                <br>
                <h4 class="filter_title">Цена</h4>
                <div>
                    <input type="number" class="price price_from" name="price_from" placeholder="От"><br>
                    <input type="number" class="price price_to" name="price_to" placeholder="До"><br>
                </div>
                <button class="reset hidden" onclick="Reset()"> Сбросить фильтры </button>
                <button class="apply" onclick="Filter()"> Применить </button>
            </div>


            <div class="mini-cart"></div>


            <div class="book_story">
              <div class="search_book">
                <input type="text" name="" value="" class="search_book_input" placeholder="Название книги...">
                <button type="button" class="search_book_btn" name="button"></button>
              </div>
                <?php
                    include 'php/download.php';
                    $link = mysqli_connect("localhost", "root", "", "library");
                    $images = mysqli_query($link, "SELECT * FROM `books`");
                ?>
                <?php
                    while ($result = mysqli_fetch_assoc($images))
                    {
                        ?>
                            <div class="block_book_catalog" id="<?php echo $result['id_ganre']; ?>"><img class="book_catalog" src="books_image/<?php echo $result['image']; ?>.jpg"><br>
                                  <p class="book_title_catalog"> <?php echo $result['title']; ?></p>
                                  <p class="price_catalog" id="<?php echo $result['cost']; ?>"> <?php echo $result['cost']; ?> руб. </p>
                                <button class="book_button_catalog" id="<?php echo $result['id_book']; ?>" onclick="addToCart(event)">Купить</button>
                                <div class="add_to_favorites" id="<?php echo $result['id_book']; ?>" onclick="addToFavorite(event)">
                                  <img src="images/star.png" id="<?php echo $result['id_book']; ?>" alt="" class="add_to_favorites_img">
                                  <p class="add_to_favorites_p">Добавить в избранное</p>
                                </div>
                              </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    <footer class="footer_catalog">
        <div class="footer_catalog_div">
            <div >
                <p class="list_footer_name_catalog">Издательство "Книжный червь"</p>
                <div>
                    <li class="list_footer_catalog">Адрес: Республика Марий Эл,</li>
                    <li class="list_footer_catalog">город Йошкар-Ола</li>
                    <li class="list_footer_catalog">test@my.com</li>
                    <li class="list_footer_catalog">12345678910</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name_catalog">Магазин</p>
                <div>
                    <li class="list_footer_catalog">Часто задаваемые вопросы</li>
                    <li class="list_footer_catalog">Обмен и возврат</li>
                    <li class="list_footer_catalog">Способы оплаты</li>
                    <li class="list_footer_catalog">Доставка</li>
                </div>
            </div>
            <div>
                <p class="list_footer_name_catalog">Социальные сети</p>
                <div>
                    <li class="list_footer_catalog">Facebook</li>
                    <li class="list_footer_catalog">Twitter</li>
                    <li class="list_footer_catalog">Instagram</li>
                    <li class="list_footer_catalog">Pinterest</li>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/index.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    <?php
    if ($_SESSION['message_from_reg']) {
      echo "console.log(".$_SESSION['message_from_reg'].")";
      unset($_SESSION['message_from_reg']);
    }
     ?>
    </script>
    </body>
</html>
