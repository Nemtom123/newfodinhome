<?php
include_once 'head.php';
Head();
include_once('FooterPdo.php');
?>
    <body style="background-color: #d0c4350f">
    <form id="contactform" action="footer_mentes.php" method="post">
        <div class="container" style="margin-top: -50px">
            <div class="row">
                <div class="col-md-12">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="fodinhome1-card-header">
                                <?php foreach ($_POST as $value) {
                                    echo $str2 = substr($value, 4);
                                    $str3 = substr_replace($str2, "", -4) . "\n";
                                }
                                ?> szerkesztése
                                <button name="ujfelvitel" type="submit" name="id" value="<?php $str3 ?>"
                                        class="btn btn-outline-success pull-right" data-toggle="modal" id="btn">
                                    <span>
                                        <a href="footeren.php?<?php foreach ($_POST as $value) {
                                            $str2 = substr($value, 0);
                                            $str3 = substr_replace($str2, "", -1) . "\n";
                                            echo $str3;
                                        } ?>">  Angol  </a>
                                    </span>
                                </button>
                            </div>
                            <?php
                            $lekerdezes = new fodinhome\FooterPdo();
                            $stmt = $lekerdezes->runQuery("SELECT * FROM footer WHERE footer_id = 1");
                            $stmt->execute(array());
                            $sor = $stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                               <?php include 'footerInline.php'?>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-warning"><a href="felhasznalok.php">Mégsem</a></button>
                                    <input type="submit" class="btn btn-success" name="rogzit-javit" value="Adatok rögzítése">
                                </div>
                        </div>
    </form>

    </body>
<?php Footer_js(); ?>