<?php include_once 'head.php';
Head();
include 'FooterPdo.php';
?>
    <link href="bootstrap-4.5.2/dist/css/bootstrap.css" rel="stylesheet"/>
    <link href="bootstrap-4.5.2/dist/css/bootstrap-grid.min.css" rel="stylesheet"/>
    <link href="bootstrap-4.5.2/dist/css/main.css" rel="stylesheet"/>
    <link rel="stylesheet" href="bootstrap-4.5.2/dist/css/fodinhome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-select-1.13.14/dist/css/bootstrap-select.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<?php
Menu();
echo '<hr>';
ob_start();
?>
    <body style="background-color: #d0c4350f">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <form method="post" action="footer_mentes.php">
                    <div class="">
                        <div class="fodinhome-card-header">
                            Admin felület / oldalak szerkesztése / <?php foreach ($_GET as $value => $key) {
                                $str2 = substr($value, 4);
                                echo $str3 = substr_replace($str2, "", 7) . "\n";
                            } ?> / angolul

                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="card spur-card">
                        <div class="fodinhome1-card-header">
                            <?php foreach ($_GET as $value => $key) {
                                $str2 = substr($value, 4);
                                echo  $str3 = substr_replace($str2, "", 7) . "\n";
                            } ?> szerkesztése angolul
                        </div>
                                <?php
                                $lekerdezes = new fodinhome\FooterPdo();
                                $stmt = $lekerdezes->runQuery("SELECT * FROM footeren WHERE footer_id = 1");
                                $stmt->execute(array());
                                $sor = $stmt->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <?php include 'footerInline.php' ?>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning"><a href="oldalak.php">Mégsem</a>
                                    </button>
                                    <input type="submit" class="btn btn-success" name="rogzit-javit_en"
                                           value="Adatok rögzítése">
                                </div>
                 </div>
    </form>
</body>
<?php Footer_js(); ?>