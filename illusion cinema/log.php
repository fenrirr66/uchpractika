<?php
	session_start();
    //подключение базы данных
    include "connect_bd.php";
    $conn = new mysqli("localhost", "root", "", "cinema_db");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }

    if(isset($_POST['auth'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        

        //пользователь или подписчик
        $sql = "SELECT role FROM users WHERE `login` = '".$login."'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result); 
        //админка       
        if($row["role"] == 'admin'){
            $_SESSION['role'] ='admin';
            location('illusion cinema/cabinet_admin.php');
        }
        if($row["role"] == 'sub'){
            $_SESSION['role'] = 'sub';
            location('illusion cinema/cabinet_sub.php');
        }
        if ($row["role"] == 'user'){
            $_SESSION['role'] = 'user';
            location('illusion cinema/cabinet_user.php');
        }
        else{
            echo "0 results";
        }
        
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
                <button class="button__podpiska">ПОДКЛЮЧИТЬ ПОДПИСКУ</button>
               </div>
              </div>
        </div>
    </header>

	<!--контентная часть-->
    <main>
        <section>
            <div class="now__watch">
        <h3>Авторизация</h3><br>
    <section class="section-register">
        <form action="" method="POST" class="auth-form">
            <input type="text" class="input__search" name="login" placeholder="Логин"><br><br>
            <input type="password" class="input__search" name="password" placeholder="Пароль"><br><br>
            <input type="submit" name="auth" value="Войти" class="button__login scale">
        </form>
    </section>
    
    </div>
        </section>
        
        <hr class="hr__footer">
    </main>

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
	<?php
        if(isset($_SESSION['debug'])){
            print($_SESSION['debug']);
            unset($_SESSION['debug']);
        }
    ?>
</body>
</html>