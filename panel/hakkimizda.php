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
    <title>Panel hakkımızda</title>
</head>

<?php
// form işlemleri
if ($_POST){
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
    $icerik1 = $_POST["icerik1"];
    $icerik2 = $_POST["icerik2"];


    /*
    $baglan->exec("delete from hakkimizda");


    $sorgu1 = $baglan-> prepare("insert into hakkimizda values(?,?,?,?)");
    $ekle = $sorgu1->execute(array(NULL,$baslik,$icerik1,$icerik2));
    if ($ekle){
        echo "<script>
            alert ('Kayıt Düzenlendi!');
            window.location.href ='hakkimizda.php';
            </script>";
    }
    */

    $sorgu = $baglan-> prepare("update hakkimizda set baslik=?,icerik1=?,icerik2=? where (id=?)");
    $guncelle = $sorgu->execute(array($baslik,$icerik1,$icerik2,$id));
    if ($guncelle){
        echo "<script>
            alert ('Kayıt Düzenlendi!');
            window.location.href ='hakkimizda.php';
            </script>";
    }
}

// Verilerin Düzenleme İçin Çekilmesi
$sorgu = $baglan->query("select * from hakkimizda")->fetch(PDO::FETCH_ASSOC);
?>

<body style = "font-size:18px; text-align:center;">
    
     <a href="index.php">Anasayfa</a><a href="hakkimizda.php">Hakkımızda</a>
     <a href="bolum1.php">Bölüm1</a><a href="bolum2.php">Bölüm2</a>
     <a href="bolum3.php">Bölüm3</a><a href="yorumlar.php">Yorumlar</a>
     <a href="../logout.php">çıkış</a>
     <br><hr><br><br>
     <h2>Hakkımızda</h2>
     <form action="hakkimizda.php" method="post">
     
        <b>Başlık</b><br>
        <input type="text" name="baslik" style="width:80%;" value="<?php echo $sorgu["baslik"]; ?>"><br><br>

        <b>İçerik1</b><br>
        <textarea name="icerik1" rows="10" style="width:80%;"><?php echo $sorgu["icerik1"]; ?></textarea><br><br><br>

        <b>İçerik2</b><br>
        <textarea name="icerik2" rows="10" style="width:80%;"><?php echo $sorgu["icerik2"]; ?></textarea><br><br>

        <input type="hidden" name="id" value="<?php echo $sorgu["id"]; ?>">
        <input type="submit" value="Kaydet">


    </form>
    </body>
</html>