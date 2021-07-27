<?php
$nyelv = isset($_GET['nyelv']) ? $_GET['nyelv'] : NULL;
$nyelv = htmlentities($nyelv);

function Meta1($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/MetaClass.php';
    $leker = new fodinhome\MetaClass();
    $beker = $leker->runQuery("SELECT * FROM meta WHERE meta_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['metaleiras' . $nyelv] ?? 'Üresen hagytad';
}

function Meta2($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/MetaClass.php';
    $leker = new fodinhome\MetaClass();
    $beker = $leker->runQuery("SELECT * FROM meta WHERE meta_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['metaleiras2' . $nyelv] ?? 'Üresen hagytad';
}

function Meta3($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/MetaClass.php';
    $leker = new fodinhome\MetaClass();
    $beker = $leker->runQuery("SELECT * FROM meta WHERE meta_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['banner' . $nyelv] ?? 'Üresen hagytad';
}

function Meta4($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/MetaClass.php';
    $leker = new fodinhome\MetaClass();
    $beker = $leker->runQuery("SELECT * FROM meta WHERE meta_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['banner2' . $nyelv] ?? 'Üresen hagytad';
}


function Meta5($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/MetaClass.php';
    $leker = new fodinhome\MetaClass();
    $beker = $leker->runQuery("SELECT * FROM meta WHERE meta_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['banner3' . $nyelv] ?? 'Üresen hagytad';
}

function Meta6($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/MetaClass.php';
    $leker = new fodinhome\MetaClass();
    $beker = $leker->runQuery("SELECT * FROM meta WHERE meta_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['h1' . $nyelv] ?? 'Üresen hagytad';
}

function index1($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/OldalakPdo.php';
    $leker = new fodinhome\OldalakPdo();
    $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['oldalak_szoveg_1' . $nyelv] ?? 'Üresen hagytad';
}

function index2($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/OldalakPdo.php';
    $leker = new fodinhome\OldalakPdo();
    $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['oldalak_szoveg_2' . $nyelv] ?? 'Üresen hagytad';
}

function index3($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/OldalakPdo.php';
    $leker = new fodinhome\OldalakPdo();
    $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['oldalak_szoveg_3' . $nyelv] ?? 'Üresen hagytad';
}

function index4($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/OldalakPdo.php';
    $leker = new fodinhome\OldalakPdo();
    $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['oldalak_szoveg_4' . $nyelv] ?? 'Üresen hagytad';
}

function index5($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/OldalakPdo.php';
    $leker = new fodinhome\OldalakPdo();
    $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['oldalak_szoveg_5' . $nyelv] ?? 'Üresen hagytad';
}



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Fodin-Home KFT</title>
    <meta name="description" content="<?php Meta1($nyelv) ?>">
    <meta name="keywords" content="<?php Meta2($nyelv) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #btnScrollToTopp {
            position: fixed;
            right: 10px;
            bottom: 10px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ff9900;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            border: none;
            color: #FFFFFF;
            outline: none;
            cursor: pointer;
            z-index: 1;
        }

        #btnScrollToTopp:active {
            background: #e68a00;
        }
    </style>
</head>

<body>

    <?php
    include_once 'NavMenu.php';
    ?>


    <section class="header">
        <h2>&nbsp;</h2>
        <h2>&nbsp;</h2>
        <h2 style="text-align: center; color:#e68a00"><?php Meta3($nyelv) ?></h2>
        <h2>&nbsp;</h2>
        <p style="text-align: center; color:#e68a22"><?php Meta4($nyelv) ?></p>
    </section>
    <br>
    <button id="btnScrollToTopp">
        <i class="material-icons">arrow_upward</i>
    </button>
    <!-- Belső rész -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="card-img" src="images/index/1.jpg" alt="1.jpg" style=" height: 400px">
            </div>
            <br><br>
            <div class="col-md-8">
                <h2 class="h4 card-title m-b-1 text-uppercase verso-mb-3"> <?php Meta6($nyelv) ?></h2>
                <p class="card-text"><?php index1($nyelv) ?></p>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="images/index/2.jpg" class="card-img-top" alt="FODIN-HOME KFT" style="height: 400px">
                        <div class="card-body">
                        <p class="card-text"> <?php index2($nyelv) ?></p>
                            <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="images/index/3.jpg" class="card-img-top" alt="..." style="height: 400px">
                        <div class="card-body">
                        <p class="card-text"> <?php index3($nyelv) ?></p>    
                        <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mx-30">
                        <img src="images/index/4.jpg" class="card-img-top" alt="..." style="width: 600px; height: 400px">
                        <div class="card-body">
                        <p class="card-text"> <?php index4($nyelv) ?></p>
                        <div class="socials">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="h4 card-title m-b-1 text-uppercase verso-mb-3"> <?php meta5($nyelv) ?></h2>
                <p class="card-text"> <?php index5($nyelv) ?></p>
            </div>
            <div class="col-md-4">
                <img class="card-img" src="images/index/5.jpg" alt="Card image" style="width: 600px; height: 400px">
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- /Belső rész vége-->
    <?php
    include_once 'footer.php';
    ?>

    <!--jQuery-->
    <script src="jquery/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            "use strict";
            $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
            $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
            $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
            $(".menu > ul > li").hover(function(e) {
                if ($(window).width() > 943) {
                    $(this).children("ul").stop(true, false).fadeToggle(150);
                    e.preventDefault();
                }
            });
            $(".menu > ul > li").click(function() {
                if ($(window).width() <= 943) {
                    $(this).children("ul").fadeToggle(150);
                }
            });
            $(".menu-mobile").click(function(e) {
                $(".menu > ul").toggleClass('show-on-mobile');
                e.preventDefault();
            });
        });
        $(window).resize(function() {
            $(".menu > ul > li").children("ul").hide();
            $(".menu > ul").removeClass('show-on-mobile');
        });
    </script>
    <script>
        const btnScrollToTopp = document.querySelector("#btnScrollToTopp");
        btnScrollToTopp.addEventListener("click", function() {
            //    window.scrollTo({
            //        top: 0,
            //        left: 0,
            //        behavior: "smooth" 
            //    }); 
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
    </script>
</body>

</html>