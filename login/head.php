<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_id() == "") {
    session_start();
}

function Head()
{ ?>
    <!DOCTYPE html>
    <html lang="hu" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- Font Awesome -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="bootstrap-4.5.2/dist/css/bootstrap.css" rel="stylesheet"/>
        <link href="bootstrap-4.5.2/dist/css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="bootstrap-4.5.2/dist/css/main.css" rel="stylesheet"/>
        <link rel="stylesheet" href="bootstrap-4.5.2/dist/css/polilakk.css">
        <link href="DataTables/DataTables-1.10.22/css/jquery.dataTables.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" charset="UTF-8"
              href="bootstrap-4.5.2/css/bootstrap-dialog.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
         <script src="DataTables/DataTables-1.10.22/js/jquery.dataTables.js"></script>
        <script src="alap/jsandcss/kozos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous"></script>
        <script src="bootstrap-4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap-4.5.2/dist/js/bootstrap.js"></script>
        <script src="bootstrap-4.5.2/dist/js/bootstrap-select.min.js"></script>
        <script src="bootstrap-4.5.2/js/src/bootstrap-dialog.js"></script>
        <script>
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });

            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
            }
        </script>

        <style>
            #example tr td {
                height: 70%;
            }
        </style>
        <?php
        print "<script language=\"Javascript\" type=\"text/Javascript\"> ";


        print "var kezdes = " . ini_get("session.gc_maxlifetime") . "; ";
        print "function VisszaSzamlalas(){ ";
        print " kezdes = kezdes-1;
                        if ( kezdes <= 10 ){
                            window.location='index.php';
                        }
                      ";
        print "}";
        print "</script>";
        ?>


    </head>
<?php } ?>
<?php
function Beallitas_POST($nev, $ertek)
{
    global $_POST;

    if (!isset($_POST[$nev])) {
        $_POST[$nev] = $ertek;
    }
    return $_POST[$nev];
}//function Beallitas_POST($nev,$ertek) vege

function Beallitas_GET($nev, $ertek)
{
    global $_GET;

    if (!isset($_GET[$nev])) {
        $_GET[$nev] = $ertek;
    }
    return $_GET[$nev];
}//function Beallitas_GET($nev,$ertek) vege

function Menu()
{
    echo '<nav class="navigation color" style="bacground-color: #13303f">
    <a href="" class="ic menu" tabindex="1"> <!-- href="javascript:void(0);" -->
        <span class="line" style="background-color: #00bbff"></span>
        <span class="line" style="background-color: #00bbff"></span>
        <span class="line" style="background-color: #00bbff"></span>
    </a>
    <a href=""  class="ic close"></a>  <!-- href="javascript:void(0);" -->
    <ul class="main-nav" style="max-width:">
        <li class="top-level-link">
            <a class="mega-menu"><span>Oldalak</span></a>
            <div class="sub-menu-block">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>

                        <ul class="sub-menu-lists">
                            <li><a href="oldalak.php">Oldalak</a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li></a></li>
                        </ul>
                    </div>
                    <!--<div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>

                        <ul class="sub-menu-lists">
                            <li><a href=""></a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>

                        <ul class="sub-menu-lists">
                            <li><a href=""></a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>

                        <ul class="sub-menu-lists">
                            <li><a href=""></a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>

                        <ul class="sub-menu-lists">
                            <li><a href=""></a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>
                        <ul class="sub-menu-lists">
                            <li><a href=""></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </li>
        <li class="top-level-link">
            <a><span>Megrendelések<span></a>
        </li>
        <li class="top-level-link">
            <a><span>Kapacitások</span></a>
        </li>
        <li class="top-level-link">
            <a class="mega-menu"><span>Logisztika</span></a>
            <div class="sub-menu-block">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>
                        <!--<div class="color-hr"></div>-->
                        <ul class="sub-menu-lists">
                            <li><a href="fuvarozas.php">Fuvarozás</a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>
                    <!--<div class="color-hr"></div>-->
                        <ul class="sub-menu-lists">
                            <li><a href="raktar.php">Raktár</a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li class="top-level-link">
            <a><span>Kimutatások</span></a>
        </li>
        <li class="top-level-link">
            <a class="mega-menu"><span>Login</span></a>
            <div class="sub-menu-block">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>
                        <!--<div class="color-hr"></div>-->
                        <ul class="sub-menu-lists">
                            <li><a href="felhasznalok.php">Felhasználó</a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>
                        <!--<div class="color-hr"></div>-->
                        <ul class="sub-menu-lists">
                            <li><a href="kilep.php">Kilép</a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li></a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2">
                        <h2 class="sub-menu-head"></h2>
                        <!--<div class="color-hr"></div>-->
                        <ul class="sub-menu-lists">
                            <li><a href="ujjelszo.php">Új jelszó létrehozása</a></li>
                            <div class="color-hr"></div>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a></a></li>
                            <li></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>';

}

function Footer_js()
{
    print "</body>";
    print "</html>";
}

?>