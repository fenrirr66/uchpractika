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
            <button class="button__login scale"><a href="log.php">Вход</a></button>
            <button class="button__reg scale"><a href="reg.php">Регистрация</a></button>
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
        <section>
            <div class="now__watch">
                <form method="get" action="search.php" class="form__search">
                    <input type="search" name="word" placeholder="Поиск" class="input__search"/>
                </form>
                <div class="now__watch__flex"><img src="assets/img/now_watch.png" alt=""><h3>Сейчас смотрят</h3></div>
                <p class="watch__all">смотреть все >></p>
                <div class="cinema__gallery">
                    <div class="card scale">
                        <a href="movie_4.html"><img src="assets/img/3.png" alt=""></a>
                        <div class="card__content">
                            <button class="button__card">3 февраля</button>
                            <div class="text__card">
                                <p class="p_24">Сияние</p>
                                <div class="img__who"><img src="assets/img/who.png" alt=""><p>Стэнли Кубрик</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card scale">
                        <a href="movie_3.html"><img src="assets/img/2.png" alt=""></a>
                        <div class="card__content">
                            <button class="button__card">3 февраля</button>
                            <div class="text__card">
                                <p class="p_24">Малхолланд Драйв</p>
                                <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дэвид Линч</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card scale">
                        <a href="movie_2.html"><img src="assets/img/1.png" alt=""></a>
                        <div class="card__content">
                            <button class="button__card">3 февраля</button>
                            <div class="text__card">
                                <p class="p_24">Меланхолия</p>
                                <div class="img__who"><img src="assets/img/who.png" alt=""><p>Ларс Фон Триер</p></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card scale">
                        <a href="movie_1.html"><img src="assets/img/0.png" alt=""></a>
                        <div class="card__content">
                            <button class="button__card">3 февраля</button>
                            <div class="text__card">
                                <p class="p_24">Одержимая</p>
                                <div class="img__who"><img src="assets/img/who.png" alt=""><p>Андрей Жулавский</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="piar__block"><img src="assets/img/banner.png" alt=""></div>
        </section>

        <section>
            <div class="now__watch">
                <div class="now__watch__flex__two"><img src="assets/img/movie_icon.png" alt=""><h3>Популярные фильмы</h3></div>
                <p class="watch__all">смотреть все >></p>
            <div class="cinema__gallery">
            
                <div class="card scale">
                    <a href="movie_7.html"><img src="assets/img/6.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Твин Пикс</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дэвид Линч</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale">
                    <a href="movie_8.html"><img src="assets/img/7.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">На игле</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дэнни Бойл</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale">
                    <a href="movie_5.html"><img src="assets/img/4.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Суспирия</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Дарио Ардженто</p></div>
                        </div>
                    </div>
                </div>
                <div class="card scale">
                    <a href="movie_6.html"><img src="assets/img/5.png" alt=""></a>
                    <div class="card__content">
                        <button class="button__card">3 февраля</button>
                        <div class="text__card">
                            <p class="p_24">Пэрл</p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p>Тай Уэст</p></div>
                        </div>
                    </div>
                </div>
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
</body>
</html>