<?php
include_once 'head.php';
Head();
include_once('class.user.php');
$id = Beallitas_GET("id", "0");
$auth_user = new USER();
//$PDOSQL->Kapcsolodas();
//$_SESSION['id'] = $id;


?>
    <body>
<?php  Menu(); ?>
    <br>
    <h2></h2>
    <!-- Nav tabs -->

    <form id="contactform"  action="felhasznalok_mentes.php" method="post">
        <div class="col-md-12">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">  Felhasználó rögzítés </h4><br>
                        <hr>
                    </div>
                    <form method="post" class="form-signin">
                        <?php
                        $stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id = 2");
                        $stmt->execute(array());
                        $sor = $stmt->fetch(PDO::FETCH_ASSOC);
                        $st = $auth_user->runQuery("SELECT * FROM users");
                        $st->execute(array());
                       
                        /*
                        $lekerdezesek = "SELECt * FROM [dbo].[BeosztasLista]()";
                        $PDOSQL->Lekerdezes($lekerdezesek);
                        */
                        ?>
                        <div class="">
                            <div class="form-row" id="tab_logic">
                                <div class="col-md-6">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Név</label>
                                            <input type="text" class="form-control" id="TeljesNev"
                                                   name="TeljesNev"
                                                   value="<?php echo isset($sor['user_name']) ? $sor['user_name'] : NULL; ?>"
                                                   placeholder="" required>
                                        </div>   
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Beosztás</label>
                                            <select class="form-control" name="Beosztas">
                                            <?php while ($sorok = $st->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <option value="<?php echo($sorok['user_id']);?>" ><?php  echo($sorok['user_email']);?></option>
                                            <?php  } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-light"><a href="felhasznalok.php">Mégsem</a>
                            </button>
                            <input type="submit"  class="btn btn-success" name="rogzit-javit" value="Adatok rögzítése">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
<?php Footer_js(); ?>