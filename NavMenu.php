<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 02. 27.
 * Time: 8:50
 */

session_start();

$nyelv = isset($_GET['nyelv']) ? $_GET['nyelv'] : NULL;
$nyelv = htmlentities($nyelv);




function nav1($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 1");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav2($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 2");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav3($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 3");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav4($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 4");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav5($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 5");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav6($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 6");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav7($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 7");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav8($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 8");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav9($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 9");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav10($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 10");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav11($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 11");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav12($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 12");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav13($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 13");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav14($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 14");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav15($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 15");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav16($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 16");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav17($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 17");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav18($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 18");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav19($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 19");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav20($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 20");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav21($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 21");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav22($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 22");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav23($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 23");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav24($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 24");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav25($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 25");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav26($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 26");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav27($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 27");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav28($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 28");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav29($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 29");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav30($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 30");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav31($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 31");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav32($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 32");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav33($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 33");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}

function nav34($nyelv)
{
    include_once 'login/dbconfig.php';
    include_once 'login/NaviClass.php';
    $leker = new fodinhome\NaviClass();
    $beker = $leker->runQuery("SELECT * FROM navmenu WHERE nav_id = 34");
    $beker->execute([]);
    $bannerszoveg = $beker->fetch(PDO::FETCH_ASSOC);
    echo $bannerszoveg['elnevezes' . $nyelv] ?? 'Üresen hagytad';
}


?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
<!-- JS 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>
        window.Modernizr || document.write('<script src="js/vendor/modernizr-2.8.3.min.js"><\/script>')
    </script>
-->
<div class="menu-container" style="text-transform: uppercase;">
    <div class="menu">
        <a href="#" class="logo"><i class="fas fa-home"> Fodin-Home Kft</i></a>
        <ul class="clearfix">
            <li><a href="index.php"><?php echo nav1($nyelv) ? nav1($nyelv) : NULL ?></a></li>
            <li><a href="#" class="szinek"><?php echo nav2($nyelv); ?></a>
                <ul>
                    <li><a href="oldal1.php"><?php echo nav3($nyelv);  ?></a>
                        <ul>
                            <li><a href="oldal2.php"><?php echo nav4($nyelv); ?></a></li>
                            <li><a href="oldal3.php"><?php echo nav5($nyelv); ?></a></li>
                            <li><a href="oldal4.php"><?php echo nav6($nyelv); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="oldal5.php"><?php echo nav7($nyelv); ?></a>
                        <ul>
                            <li><a href="oldal6.php"><?php echo nav8($nyelv); ?></a></li>
                            <li><a href="oldal7.php"><?php echo nav9($nyelv); ?></a></li>
                            <li><a href="oldal8.php"><?php echo nav10($nyelv); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="oldal9.php"><?php echo nav11($nyelv); ?></a>
                        <ul>
                            <li><a href="oldal10.php"><?php echo nav12($nyelv); ?></a></li>
                            <li><a href="oldal11.php"><?php echo nav13($nyelv); ?></a></li>
                            <li><a href="oldal12.php"><?php echo nav14($nyelv); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="oldal13.php"><?php echo nav15($nyelv); ?></a>
                        <ul>
                            <li><a href="oldal13.php"><img src="images/10.jpg" style="max-width: 240px; height: 200px"></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
           <!-- <li><a href="oldal14.php"><?php // echo nav16($nyelv); ?></a>
                <ul>
                    <li><a href="oldal15.php"><?php ///echo nav17($nyelv); ?></a></li>
                    <li><a href="oldal16.php"><?php //echo nav18($nyelv); ?></a></li>
                    <li><a href="oldal17.php"><?php //echo nav19($nyelv); ?></a></li>
                </ul>
            </li> -->
            <li><a href="oldal18.php"><?php echo nav20($nyelv); ?></a>
                <ul>
                    <li><a href="oldal19.php"><?php echo nav21($nyelv); ?></a>
                        <ul>
                            <li><a href="oldal20.php"><?php echo nav22($nyelv); ?></a></li>
                            <li><a href="oldal21.php"><?php echo nav23($nyelv); ?></a></li>
                            <li><a href="oldal22.php"><?php echo nav24($nyelv); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="oldal23.php"><?php echo nav25($nyelv); ?></a>
                        <ul>
                            <li><a href="oldal24.php"><?php echo nav26($nyelv); ?></a></li>
                            <li><a href="oldal25.php"><?php echo nav27($nyelv); ?></a></li>
                            <li><a href="oldal26.php"><?php echo nav28($nyelv); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="login/index.php"><?php echo nav29($nyelv); ?></a>
                        <ul>
                            <li><a href="login/index.php"><img src="images/10.jpg" style="max-width: 250px; height: 200px"></a></li>
                        </ul>
                    </li>
                    <li><a href="kontakt.php"><?php echo nav30($nyelv); ?></a>
                        <ul>
                            <li><a href="login/kontakt.php"><img src="images/10.jpg" style="max-width: 250px; height: 200px"></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
            <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">
                    <?php
                    if ($nyelv == '') {
                        echo 'HU';
                    } elseif ($nyelv == '_en') {
                        echo 'EN';
                    }
                    ?>
                    <b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                    <li>
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <ul class="list-unstyled mb-3">
                                    <form method="get">
                                        <li class="nav-item"><a href="" class="btn-info" style="background-color: white;">
                                                <button class="btn" type="submit" name="nyelv" value="_en"">ENGLISH
                                                </button>
                                            </a></li>
                                        <li class="nav-item"><a href="" class="btn-info" style="background-color: white;">
                                                <button class="btn" type="submit" name="nyelv" value="">MAGYAR</button>
                                            </a></li>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>