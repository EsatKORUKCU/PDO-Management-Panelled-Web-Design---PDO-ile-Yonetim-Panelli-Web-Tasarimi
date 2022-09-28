<?php
    require_once("ayar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Design landing page.">
    <meta name="author" content="Devcrud">
    <title>Creative Design | Free Bootstrap 4.3.x template</title>
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/creative-design.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><strong class="text-primary">Creative</strong> <span class="text-dark">Design</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ml-md-4">
                        <a class="nav-link btn btn-primary" href="#contact">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <p>Lorem ipsum dolor sit amet.</p>
            <h6>Creative Design</h6> 
            <button class="btn btn-outline-light">Download Now</button> 
        </div>      
    </header>
    <?php
        $sorgu = $baglan->query("select * from hakkimizda");
        $satir = $sorgu->fetch(PDO::FETCH_ASSOC);
    ?>
    <section id="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="after"><h1>About Us</h1></div>
                <div class="content">
                    <h5 class="title mb-3"><?php echo $satir["baslik"]; ?></h5>
                    <div class="row">
                        <div class="col">
                            <?php echo $satir["icerik1"]; ?>
                        </div>
                        <div class="col">
                            <?php echo $satir["icerik2"]; ?>
                        </div>
                    </div>               
                    <a href="javascript:void(0)">Read More...</a>
                </div>
            </div>     
        </div>     
     </section>
    <section>
        <?php
            $sorgu = $baglan->query("select * from bolum1");
            $satir = $sorgu->fetch(PDO::FETCH_ASSOC);
            echo "<div class='container'>
            <div class='row justify-content-between align-items-center'>
            <div class='col-md-6'>
            <div class='img-wrapper'>
            <div class='after'></div>
            <img src='$satir[resim]' class='w-100' alt='About Us'>
            </div>
            </div>
            <div class='col-md-5'>
            <h6 class='title mb-3'>$satir[baslik]</h6>
            $satir[icerik]                 
            <button class='btn btn-outline-primary btn-sm'>Learn More</button>
            </div>
            </div>
            </div>";
        ?>
    </section>
    <section>
        <?php
            $sorgu = $baglan->query("select * from bolum2");
            $satir = $sorgu->fetch(PDO::FETCH_NUM);
            echo "<div class='container'>
            <div class='row justify-content-between align-items-center'>                
            <div class='col-md-5'>
            <h6 class='title mb-3'>$satir[1]</h6>
            $satir[2]   
            <button class='btn btn-outline-primary btn-sm'>Learn More</button>
            </div>
            <div class='col-md-6'>
            <div class='img-wrapper'>
            <div class='after right'></div>
            <img src='$satir[3]' class='w-100' alt='About Us'>
            </div>                      
            </div>
            </div>     
            </div>";
        ?>
    </section>
    <section class="has-bg-img" id="features">
        <div class="overlay"></div>
        <a data-toggle="modal" href="#exampleModalCenter">
            <i></i>
        </a>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                     <iframe width="100%" height="450px" class="border-0" 
                    src="https://www.youtube.com/embed/tgbNyZ7vqY?controls=0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <section>
        <?php
            $sorgu = $baglan->query("select * from bolum3");
            $satir = $sorgu->fetch(PDO::FETCH_OBJ);
            echo "<div class='container'>
            <div class='row justify-content-between align-items-center'>
            <div class='col-md-6'>
            <div class='img-wrapper'>
            <div class='after'></div>
            <img src='$satir->resim' class='w-100' alt='About us'>
            </div>
            </div>
            <div class='col-md-5'>
            <h6 class='title mb-3'>$satir->baslik</h6>
            $satir->icerik  
            <button class='btn btn-outline-primary btn-sm'>Learn More</button>
            </div>
            </div>     
            </div>";
        ?>
    </section>
    <section class="text-center pt-5" id="testmonial">
        <div class="container">
            <h3 class="mt-3 mb-5 pb-5">What our Client says</h3>
            <div class="row">
                <?php
                    $sorgu = $baglan->query("select * from yorumlar order by id desc limit 3");
                    if ($sorgu->rowCount()) {
                        foreach ($sorgu as $satir) {
                            echo "<div class='col-sm-10 col-md-4 m-auto'>
                            <div class='testmonial-wrapper'>
                            <img src='$satir[resim]' alt='Client Image'>
                            <h6 class='title mb-3'>$satir[adsoyad]</h6>
                            $satir[icerik]
                            </div>
                            </div>";
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="has-bg-img text-center text-light height-auto" style="background-image: url(assets/imgs/bg-img-2.jpg)">
        <h1 class="display-4">LET’S TALK BUSINESS.</h1>
    </section>
    <section id="contact" class="text-center">
        <div class="container">
            <h1>ADMIN PANEL</h1>
            <p class="mb-5">Please write your login credentials to sign in admin panel.</p>
            <form method="post" action="login.php" class="contact-form col-md-11 col-lg-9 mx-auto">
                <div class="form-row">
                    <div class="col form-group">
                        <input type="text" name="user" class="form-control" placeholder="Username">
                    </div>
                    <div class="col form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Pass">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                </div>
            </form>
        </div> 
    </section>
    <section class="pb-0">
        <div class="container">
            <div class="pre-footer">
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">ABOUT US</h6>
                    </li>
                    <li class="list-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nobis fugit maxime deleniti minus optio accusamus, quam maiores explicabo sunt.</p>
                        <a href="#"><strong class="text-primary">Creative</strong> <span class="text-dark">Design</span></a>
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">USEFUL LINKS</h6>
                    </li>
                    <li class="list-body">
                        <div class="row">
                            <div class="col">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                                <a href="#">Link 4</a>
                            </div>
                            <div class="col">
                                <a href="#">Link 5</a>
                                <a href="#">Link 6</a>
                                <a href="#">Link 7</a>
                                <a href="#">Link 8</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">CONTACT INFO</h6>
                    </li>
                    <li class="list-body">
                        <p>Contact us and we'll get back to you within 24 hours.</p>
                        <p><i class="ti-location-pin"></i> 12345 Fake ST NoWhere AB Country</p>
                        <p><i class="ti-email"></i>  info@website.com</p>
                        <div class="social-links">
                            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
                        </div>
                    </li>
                </ul> 
            </div>   
            <footer class="footer">            
                <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">DevCRUD</a></p>
            </footer>
        </div>
    </section>
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/js/creative-design.js"></script>
</body>
</html>