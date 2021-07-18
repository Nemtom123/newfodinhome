<?php
include_once 'head.php';
Head();
include_once('class.user.php');
$id = Beallitas_GET("id", "0");
$auth_user = new USER();
//$PDOSQL->Kapcsolodas();
//$_SESSION['id'] = $id;


?>
    <body style="background-color: #f1eae0">
<?php Menu(); ?>
    <br>
    <h2></h2>
    <!-- Nav tabs -->

    <form id="contactform" action="felhasznalok_mentes.php" method="post">
        <div class="col-md-12">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> Felhasználó rögzítés </h4><br>
                        <hr>
                    </div>
                    <form method="post" class="form-signin">
                        <?php
                        $ID = (isset($id)) ? $id : NULL;
                        $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id = " . $ID . " ");
                        $stmt->execute(array());
                        $sor = $stmt->fetch(PDO::FETCH_ASSOC);
                        $st = $auth_user->runQuery("SELECT * FROM users");
                        $st->execute(array());
                        ?>
                        <input type="hidden" name="id"
                               value="<?php echo (isset($sor['user_id'])) ? $sor['user_id'] : NULL; ?>">

                        <div class="">
                            <div class="form-row" id="tab_logic">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Név</label>
                                            <input type="text" class="form-control" id="user_name"
                                                   name="user_name"
                                                   value="<?php echo (isset($sor['user_name'])) ? $sor['user_name'] : NULL; ?>"
                                                   placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">E-mail</label>
                                            <input type="text" class="form-control" id="user_email"
                                                   name="user_email"
                                                   value="<?php echo (isset($sor['user_email'])) ? $sor['user_email'] : NULL; ?>"
                                                   placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jelszó</label>
                                            <input type="text" class="form-control" id="user_pass"
                                                   name="user_pass"
                                                   value="<?php echo (isset($sor['user_pass'])) ? $sor['user_pass'] : NULL; ?>"
                                                   placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning"><a href="felhasznalok.php">Mégsem</a>
                            </button>
                            <input type="submit" class="btn btn-success" name="rogzit-javit" value="Adatok rögzítése">
                        </div>
                </div>
    </form>
<?php Footer_js(); ?>