<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 06. 10.
 * Time: 22:42
 */
?>
    <div class="table-title " style="width: initial">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 5px">
                <b style="padding-top: 10px"><span> Felhasználók </span></b>
            </div>
            <div class="col-sm-6">
                <button name="ujfelvitel" VALUE="új felvitel" type="submit"  class="btn btn-success" data-toggle="modal"  value="Új felvitele" id="btn" onClick="Szerkesztes(0);"><i class="material-icons">&#xE147;</i>
                    <span> új felvitel </span></button>
            </div>
        </div>
    </div>
    <div class="card spur-card">
        <div class="fodinhome1-card-header">
            <?php foreach ($_POST as $value) {
                echo $str2 = substr($value, 4);
                $str3 = substr_replace($str2, "", -4) . "\n";
            } ?> szerkesztése
        </div>
        <span><i class="fas fa-arrow-alt-circle-right"></i></span>
        <textarea id="editor1" name="oldalak_szoveg" title="">
                    <?php
                    foreach ($_POST as $value) {
                        $str2 = substr($value, 0);
                        $str3 = substr_replace($str2, "", 1) . "\n";
                    }
                    include_once 'OldalakPdo.php';
                    $leker = new namespace\fodinhome\OldalakPdo();
                    $beker = $leker->runQuery("SELECT * FROM aloldalak WHERE al_oldalak_id = $str3 ");
                    $beker->execute([]);
                    $kertadat = $beker->fetch(PDO::FETCH_ASSOC);
                    $adat = (isset($kertadat['al_oldalak_1_en'])) ? $kertadat['al_oldalak_1_en'] : NULL;
                    print_r($adat);
                    ?>
                </textarea>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    </div>
    <br>
    <br>
    <div class="card spur-card">
        <div class="fodinhome1-card-header">
            <?php foreach ($_POST as $value) {
                echo $str2 = substr($value, 4);
                $str3 = substr_replace($str2, "", -4) . "\n";
            } ?> szerkesztése
        </div>
        <span><i class="fas fa-arrow-alt-circle-right"></i></span>
        <textarea id="editor5" name="oldalak_szoveg" title="">
                    <?php
                    $adat = (isset($kertadat['al_oldalak_2_en'])) ? $kertadat['al_oldalak_2_en'] : NULL;
                    print_r($adat);
                    ?>

                </textarea>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor5'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    </div>
<?php
