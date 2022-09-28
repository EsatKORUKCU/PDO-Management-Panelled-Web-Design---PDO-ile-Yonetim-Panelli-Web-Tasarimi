<?php
session_start();
require_once("../ayar.php");// ayar.php inkulut /import/ çagırmak için kullanılır 

$giris = intval($_SESSION["giris"]);

if($giris<=0){
    header("Location:../logout.php");
    die();}
    $sorgu = $baglan->query("select * from yonetici where (id ='$giris' )")->fetch(PDO::FETCH_ASSOC);
if(is_null($sorgu)){header("Location:../logout.php");die();}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Anasayfa</title>
</head>
<body style = "font-size:18px; text-align:center;">
    
     <a href="index.php">Anasayfa</a><a href="hakkimizda.php">Hakkımızda</a>
     <a href="bolum1.php">Bölüm1</a><a href="bolum2.php">Bölüm2</a>
     <a href="bolum3.php">Bölüm3</a><a href="yorumlar.php">Yorumlar</a>
     <a href="../logout.php">çıkış</a>
     <br><hr><br><br>
     <h2>Ana Sayfa </h2>
     <p>Lütfen Menüden Düzenlemek İstediginiz Sayfayı Seçin..</p>
    </body>
</html>