<?php include_once 'head.php';
//Head();
?>
<link href="bootstrap-4.5.2/dist/css/bootstrap.css" rel="stylesheet"/>
<link href="bootstrap-4.5.2/dist/css/bootstrap-grid.min.css" rel="stylesheet"/>
<link href="bootstrap-4.5.2/dist/css/main.css" rel="stylesheet"/>
<link rel="stylesheet" href="bootstrap-4.5.2/dist/css/polilakk.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-select-1.13.14/dist/css/bootstrap-select.css">
<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<body>
<?php
Menu();
echo '<hr>';
ob_start();
include_once('class.user.php');
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
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
                if ($_POST['replay'] == 2 OR $_POST['replay'] == 4 OR $_POST['replay'] == 19 OR $_POST['replay'] == 38 OR $_POST['replay'] == 8 OR $_POST['replay'] == 14 OR $_POST['replay'] == 19){
                    include 'indexOldalSzerkesztes.php';
                    }
                ?>
                <?php
                if ($_POST['replay'] == 15 OR $_POST['replay'] == 26 OR $_POST['replay'] == 33 OR $_POST['replay'] == 35 OR $_POST['replay'] == 36 OR $_POST['replay'] == 37 OR $_POST['replay'] == 5 OR $_POST['replay'] == 6 OR $_POST['replay'] == 7 OR $_POST['replay'] == 10 OR $_POST['replay'] == 11 OR $_POST['replay'] == 12 OR $_POST['replay'] == 16 OR $_POST['replay'] == 17 OR $_POST['replay'] == 18 OR $_POST['replay'] == 20 OR $_POST['replay'] == 21 OR $_POST['replay'] == 22) {
                    include 'oldalakSzerkesztes.php';
                }
                ?>
                <?php
                if ($_POST['replay'] == 0){
                    include 'navMenuSzerkesztes.php';
                }
                ?>
                <br>
                <br>
                <button class="btn btn-success pull-left" id="btn-rogzit" name="btn-rogzit" value="rogzit"
                        type="submit" onclick="myfunction">Rögzít
                </button>

                <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza"
                        type="submit" onclick="myfunction"><a href="oldalak.php" style="color: white"> Vissza </a>
                </button>

            </form>
        </div>
    </div>
</div>
