<?php
    session_start();
    require_once("ayar.php");// ayar.php inkulut /import/ çagırmak için kullanılır 
    $kullanici = htmlspecialchars(strip_tags($_POST["user"]));
    $sifre = htmlspecialchars(strip_tags($_POST["pass"]));
    $sifre = sha1(md5($sifre));

    //echo "$kullanici - $sifre"; // kullanıcı şifrelernin dogru gelip gelmedigini yazmak için

    
    $sorgu = $baglan->query("select * from yonetici where (kullanici ='$kullanici' && sifre='$sifre')")->fetch(PDO::FETCH_ASSOC);
    
    if($sorgu["id"]>0){
        $_SESSION["giris"] =$sorgu["id"];
        header("Location:panel/index.php");
    } else{
      //  header("Location:index.php");
        echo "<script>
            alert ('HATALI KULLANICI ADI-ŞİFRE');
            window.location.href ='index.php';
            </script>";
    }
    
?>