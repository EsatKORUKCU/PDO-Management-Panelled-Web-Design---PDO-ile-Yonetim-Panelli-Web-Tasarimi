<?php

$baglan = new PDO("mysql:host=localhost;dbname=uygulama;charset=utf8","kullanici","parola"); // veritabanına baglanma kısmı

$baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Hata kontrol için
$baglan->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$baglan->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Her seferinde fect assoc yazmamaak için yapılan ayar
?>