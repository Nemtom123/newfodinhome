<?php include_once 'head.php'; ?>
<link href="bootstrap-4.5.2/dist/css/bootstrap.css" rel="stylesheet"/>
<link href="bootstrap-4.5.2/dist/css/bootstrap-grid.min.css" rel="stylesheet"/>
<link href="bootstrap-4.5.2/dist/css/main.css" rel="stylesheet"/>
<link rel="stylesheet" href="bootstrap-4.5.2/dist/css/fodinhome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-select-1.13.14/dist/css/bootstrap-select.css">
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<body>
<?php
Menu();
echo '<hr>';
ob_start();
?>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <form method="post" action="oldalak_rogzit.php">
                <div class="">
                    <div class="fodinhome-card-header">
                        Admin felület / oldalak szerkesztése / <?php foreach ($_POST as $value) { echo $str2  = substr($value, 0); $str3 = substr_replace($str2, "", -4) . "\n"; } ?>
                    </div>
                </div>
                <br>
                <?php
              $replay  =   (isset($_POST['replay'])) ? $_POST['replay'] : null;
                if ($replay == 2 OR $replay == 4 OR $replay == 19 OR $replay == 38 OR $replay == 8
                    OR $replay == 14 OR $replay == 19){
                    include 'indexOldalSzerkesztes.php';   ?>
                    <br>
                    <br>
                    <button class="btn btn-success pull-left" id="btn-rogzit" name="btn-rogzit" value="rogzitIndexMa"
                            type="submit" onclick="myfunction">Rögzít
                    </button>
                    <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza"
                            type="submit" onclick="myfunction"><a href="oldalak.php" style="color: white"> Vissza </a>
                    </button>
                <?php } ?>

                <?php
                if ($replay == 15 OR $replay == 26 OR $replay == 33 OR $replay == 35 OR $replay == 36
                    OR $replay == 37 OR $replay == 5 OR $replay == 6 OR $replay == 7 OR $replay == 10
                    OR $replay == 11 OR $replay == 12 OR $replay == 16 OR $replay == 17 OR $replay == 18
                    OR $replay == 20 OR $replay == 21 OR $replay == 22) {
                    include 'oldalakSzerkesztes.php'; ?>
                    <br>
                    <br>
                    <button class="btn btn-success pull-left" id="btn-rogzit" name="btn-rogzit" value="rogzitMa"
                            type="submit" onclick="myfunction">Rögzít
                    </button>
                    <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza"
                            type="submit" onclick="myfunction"><a href="oldalak.php" style="color: white"> Vissza </a>
                    </button>
                <?php } ?>
            </form>

                <?php
                if ($replay == 0){
                    include 'navMenuSzerkesztes.php';
                }
                ?>

                 <?php
                 if ($replay == 3){
                    include 'kontakt.php';
                }
                ?>

                <?php
                if ($replay == 1){
                    include 'footer.php';
                }
                ?>

        </div>
    </div>
</div>

