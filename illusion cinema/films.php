<?php
	session_start();
    //подключение базы данных
    include "connect_bd.php";
    $conn = new mysqli("localhost", "root", "", "cinema_db");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/uikit.min.css">
    <title>illusion</title>
</head>
<body>
    <header>
        <div class="size__70">
            <div class="head__one">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="">
                </div>
                <div class="place">Стерлитамак</div>
                <div class="messengers">
                    <img src="assets/img/messengers.png" alt="">
                </div>
                <div class="phone">
                    <img src="assets/img/phone.png" alt="">
                    + 998 458 254 45
                </div>
            </div>
        </div>
        <div class="head__color__131721">
        <div class="size__70">
          <div class="head__two">
            <div class="menu">
              <ul>
              <li><a href="main.php">Главная</a></li>
                <li><a href="films.php">Фильмы</a></li>
                <li><a href="serials.php">Сериалы</a></li>
              </ul>
            </div>
            <div class="rave__vhodi">
            <div class="search"><img src="assets/img/search.png" alt=""></div>
            <button class="button__login scale">Вход</button>
            <button class="button__reg scale">Регистрация</button>
            </div>
          </div>
        </div>
        </div>    
        <div class="size"></div>        
        <div class="head__banner">
              <div class="cover__head__banner">
               <div class="hate__sale">
                <h1>ТВ-каналы, фильмы и сериалы в одной подписке</h1>
                <h2>30 дней бесплатно</h2>
                <button class="button__podpiska scale">ПОДКЛЮЧИТЬ ПОДПИСКУ</button>
               </div>
              </div>
        </div>
    </header>
    
    <main>
        <section class="section__left">
            <div class="now__watch">
                <div class="now__watch__flex__left"><img src="assets/img/movie_icon.png" alt=""><h3>Фильмы</h3></div>
            </div>
        </section>
        <section>
            <div class="now__watch">
                
            <div class="cinema__gallery uk-search" uk-filter="target: .js-filter">
                <ul class="uk-subnav uk-subnav-pill">
                    <li uk-filter-control="[data-tags*='film']"><a href="#">Все фильмы</a></li>
                    <li uk-filter-control="[data-tags*='horror']"><a href="#">Ужасы</a></li>
                    <li uk-filter-control="[data-tags*='drama']"><a href="#">Драма</a></li>
                    <li uk-filter-control="[data-tags*='comedy']"><a href="#">Комедия</a></li>
                    <li uk-filter-control="[data-tags*='fantastic']"><a href="#">Фантастика</a></li>
                </ul>

                <ul class="js-filter cinema__gallery">
                <div class="card scale" data-tags="film horror">
                    <a href="movie_4.html"><img src="assets/img/3.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24 uk-search" aria-label="Сияние">Сияние</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Стэнли Кубрик</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale" data-tags="film drama fantastic">
                    <a href="movie_3.html"><img src="assets/img/2.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Малхолланд Драйв</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дэвид Линч</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale" data-tags="film drama">
                    <a href="movie_2.html"><img src="assets/img/1.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Меланхолия</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Ларс Фон Триер</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale" data-tags="film horror fantastic">
                    <a href="movie_1.html"><img src="assets/img/0.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Одержимая</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Андрей Жулавский</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale" data-tags="film comedy">
                    <a href="movie_8.html"><img src="assets/img/7.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">На игле</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дэнни Бойл</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale" data-tags="film horror">
                    <a href="movie_5.html"><img src="assets/img/4.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Суспирия</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дарио Ардженто</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale" data-tags="film drama comedy">
                    <a href="movie_6.html"><img src="assets/img/5.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Пэрл</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Тай Уэст</p></div>
                        </div>
                    </div>
                </div>
            </ul>

            </div>
        </div>
        </section>
        <hr class="hr__footer">
    </main>
    <footer>    
          <div class="display__footer">
            <div class="logo__footer">
                <div><img src="assets/img/logo.png" alt=""></div><br>
                <img src="assets/img/call-footer.png" alt=""></div>
            <div></div>
            <p class="p__footer">Фотоотчеты<br><br>Анонсы<br><br>Заведения</p>
            <p class="p__footer">Статьи<br><br>Видео<br><br>Контакты</p>
        
            <div class="messangers__footer">
            <button class="button__podpiska__footer scale">Подписаться на уведомления</button><br><br>
            <div><img src="assets/img/messengers.png" alt="">
            </div>
            </div>
          </div>
    </footer>
    <script src="assets/js/uikit.min.js"></script>
</body>
</html>