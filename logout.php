<?php
    session_start();
    require_once("ayar.php");// ayar.php inkulut /import/ çagırmak için kullanılır 

    $_SESSION["giris"] ="";
    session_destroy();
    header("Location:index.php");
?>