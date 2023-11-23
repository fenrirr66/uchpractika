<?php
session_start();
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema_db";
$conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM products WHERE id IN (".implode(",", array_keys($_SESSION["cart"])). ")";
    $result = $conn->query($sql);


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
            <button class="button__login scale"><a href="exit.php">Выход</a></button>
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
                <h3>Избранное</h3>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
                <div class="card scale">
                    <a href="<?php echo $row["src"]; ?>"><img src="<?php echo $row["img"]; ?>" alt=""></a>
                    <div class="card__content">
                        <div class="text__card">
                            <p class="p_24"><?php echo $row["name_cinema"]; ?></p>
                            <div class="img__who"><img src="assets/img/who.png" alt=""><p><?php echo $row["producer"]; ?></p></div>
                        </div>
                    </div>
                </div>
                <form method="post" action="delete_tovar.php">
                        <input type="hidden" name="product_id" value="<?php echo $row["id"]; ?>">
                        <button class="button__podpiska__footer scale" type="submit">Удалить</button>
                </form>
        <?php } ?>
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