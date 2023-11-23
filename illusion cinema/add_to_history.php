<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinema_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Инициализация корзины
session_start();
if (!isset($_SESSION["history"])) {
    $_SESSION["history"] = array();
}

// Добавление товара в корзину
if (isset($_POST["history_id"])) {
    $history_id = $_POST["history_id"];
    if (isset($_SESSION["history"][$history_id])) {
        $_SESSION["history"][$history_id]++;
    } else {
        $_SESSION["history"][$history_id] = 1;
    }
}

// Перенаправление на страницу корзины
header("Location: cabinet_history.php");
exit();
?>