<?php
    //инициализация сессии
	session_start();
    //подключение базы данных
	include "connect_bd.php";

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users VALUES(NULL, '$name', '$surname', '$patronymic', '$login', '$email', '$password', 'user')";
        $_SESSION['login'] = $login;
        query($sql);
        location('illusion cinema/log.php');
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
                <li><a href="reg.php">Личныйкабинет</a></li>
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
                <button class="button__podpiska">ПОДКЛЮЧИТЬ ПОДПИСКУ</button>
               </div>
              </div>
        </div>
    </header>

	<!--контентная часть-->
    <main>
        <section>
            <div class="now__watch">
                        <h3>Регистрация</h3><br>
		<section class="section-register">
        <form action="" method="POST" class="auth-form">
            <input type="text" class="input__search" name="name" placeholder="Имя" required pattern="[А-Яа-я\s\-]+?" title="Кириллица, пробел и тире"><br><br>
            <input type="text" class="input__search" name="surname" placeholder="Фамилия" required pattern="[А-Яа-я\s\-]+?" title="Кириллица, пробел и тире"><br><br>
            <input type="text" class="input__search" name="patronymic" placeholder="Отчество" required pattern="[А-Яа-я\s\-]+?" title="Кириллица, пробел и тире"><br><br>
            <input type="text" class="input__search" name="login" placeholder="Логин"  required pattern="[A-Za-z0-9\-]+?" title="Латиница, цифры и тире"><br><br>
            <input type="email" class="input__search" name="email" placeholder="Email"><br><br>
            <input type="password" class="input__search pass1" name="password" placeholder="Пароль" required pattern=".{6,}" title="Пароль должен быть длиннее 5 символов"><br><br>
            <input type="password2" class="input__search pass2" name="password" placeholder="Повторите пароль"  required pattern=".{6,}" title="Пароль должен быть длиннее 5 символов"><br>
            <div style="display: flex; gap: 25px;"><input type="checkbox" id="rules" required><label for="rules">Согласен с правилами регистрации</label></div><br>
            <input type="submit" name="register" value="Зарегистрироваться" class="button__login scale">
        </form>
        </section>
            </div>
        </section>
        <hr class="hr__footer">
    </main>

	<div class="fon">
	<div class="content">
		<div class="container">

			<br><br><br><br>
		</div>
	</div>
    </div>

	<!--подвал-->
    <footer>    
          <div class="display__footer">
            <div class="logo__footer">
                <div><img src="assets/img/logo.png" alt=""></div><br>
                <img src="assets/img/call-footer.png" alt=""></div>
            <div></div>
            <p class="p__footer">Фотоотчеты<br><br>Анонсы<br><br>Заведения</p>
            <p class="p__footer">Статьи<br><br>Видео<br><br>Контакты</p>
        
            <div class="messangers__footer">
            <button class="button__podpiska__footer">Подписаться на уведомления</button><br><br>
            <div><img src="assets/img/messengers.png" alt="">
            </div>
            </div>
          </div>
    </footer>
	<script>
        let authForm = document.getElementsByClassName('auth-form')[0];
        authForm.addEventListener('submit', function(e){
            let pass1 = document.getElementsByClassName('pass1')[0].value;
            let pass2 = document.getElementsByClassName('pass2')[0].value;
            if(pass1 != pass2){
                e.preventDefault();
                alert('Пароли должны совпадать');
            }
        })
    </script>
    <?php
        if(isset($_SESSION['debug'])){
            print($_SESSION['debug']);
            unset($_SESSION['debug']);
        }
    ?>
</body>
</html>