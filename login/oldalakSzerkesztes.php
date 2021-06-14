<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 06. 10.
 * Time: 22:42
 */
?>
<div class="card spur-card">
    <div class="fodinhome1-card-header">
        <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
    </div>
    <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
    <textarea id="editor1" name="oldalak_szoveg" title="">
                    <?php
                    //                    include_once 'OldalakPdo.php';
                    //                   $leker = new namespace\watb\OldalakPdo();
                    //                   $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = '$value'");
                    //                   $beker->execute([]);
                    //                   $kertadat = $beker->fetch(PDO::FETCH_ASSOC);
                    ?>

                    <?php
                    //print_r($kertadat['oldalak_szoveg_ru']);
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
        <?php foreach ($_POST as $value) { echo $str2  = substr($value, 4); $str3 = substr_replace($str2, "", -4) . "\n"; } ?> szerkesztése
    </div>
    <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
    <textarea id="editor5" name="oldalak_szoveg" title="">
                    <?php
                    //                    include_once 'OldalakPdo.php';
                    //                   $leker = new namespace\watb\OldalakPdo();
                    //                   $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id = '$value'");
                    //                   $beker->execute([]);
                    //                   $kertadat = $beker->fetch(PDO::FETCH_ASSOC);
                    ?>

                    <?php
                    //print_r($kertadat['oldalak_szoveg_ru']);
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
