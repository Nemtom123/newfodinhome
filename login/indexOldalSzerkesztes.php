<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 06. 10.
 * Time: 14:46
 */
?>
<div class="card spur-card">
    <div class="fodinhome1-card-header">
        <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
    </div>
    <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
    <textarea id="editor1" name="oldalak_szoveg_1" title="">
                    <?php
                      foreach ($_POST as $value) {  $str2  = substr($value, 0);  $str3 = substr_replace($str2, "", 1) . "\n"; }
                        include_once 'OldalakPdo.php';
                        $leker = new namespace\fodinhome\OldalakPdo();
                        $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = $str3 ");
                        $beker->execute([]);
                        $kertadat = $beker->fetch(PDO::FETCH_ASSOC);
                        $adat = (isset($kertadat['oldalak_szoveg_1'])) ? $kertadat['oldalak_szoveg_1'] : NULL;
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
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card spur-card">
                <div class="fodinhome1-card-header">
                    <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
                </div>
                <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
                <textarea id="editor2" name="oldalak_szoveg_2" title="">
                    <?php
                    $adat = (isset($kertadat['oldalak_szoveg_2'])) ? $kertadat['oldalak_szoveg_2'] : NULL;
                    print_r($adat);
                    ?>
                </textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor2'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card spur-card">
                <div class="fodinhome1-card-header">
                    <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
                </div>
                <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
                <textarea id="editor3" name="oldalak_szoveg_3" title="">
                  <?php
                  $adat = (isset($kertadat['oldalak_szoveg_3'])) ? $kertadat['oldalak_szoveg_3'] : NULL;
                  print_r($adat);
                    ?>
                </textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor3'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card spur-card">
                <div class="fodinhome1-card-header">
                    <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
                </div>
                <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
                <textarea id="editor4" name="oldalak_szoveg_4" title="">
                    <?php
                    $adat = (isset($kertadat['oldalak_szoveg_4'])) ? $kertadat['oldalak_szoveg_4'] : NULL;
                    print_r($adat);
                    ?>
                </textarea>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor4'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="card spur-card">
    <div class="fodinhome1-card-header">
        <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
    </div>
    <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
    <textarea id="editor5" name="oldalak_szoveg_5" title="">
                    <?php
                    $adat = (isset($kertadat['oldalak_szoveg_5'])) ? $kertadat['oldalak_szoveg_5'] : NULL;
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