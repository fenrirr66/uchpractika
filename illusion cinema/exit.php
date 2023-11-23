<?php
$_SESSION ["history"] = array();
$_SESSION ["cart"] = array();
unset($_SESSION["history"]);
unset($_SESSION["cart"]);
session_destroy();
header('Location:log.php');
?>