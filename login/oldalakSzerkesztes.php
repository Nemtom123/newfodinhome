<br>
<hr>
<?php
$GetMessage = (isset($_GET['rogzites'])) ? $_GET['rogzites'] : NULL;
if(empty($GetMessage)) {
    $message = $GetMessage;
    echo $message;
}?>
<div class="card spur-card">
    <div class="fodinhome1-card-header">
        <?php foreach ($_POST as $value) {
            echo $str2 = substr($value, 4);
            $str3 = substr_replace($str2, "", -4) . "\n";
        }
        ?> szerkesztése
        <button name="ujfelvitel" type="submit" name="id" value="<?php $str3 ?>"
                class="btn btn-outline-success pull-right" data-toggle="modal" id="btn">
            <span>
                <a href="oldalakSzerkesztesEn.php?<?php foreach ($_POST as $value) {
                    $str2 = substr($value, 0);
                    $str3 = substr_replace($str2, "", -1) . "\n";
                    echo $str3;
                } ?>">  Angol  </a>
            </span>
        </button>
    </div>
    <input type="hidden" name="al_oldalak_id" value="<?php
    foreach ($_POST as $value) {
        $str2 = substr($value, 0);
        echo $str3 = substr_replace($str2, "", 1) . "\n";
    }
    ?>">
    <span><i class="fas fa-arrow-alt-circle-right"></i></span>
    <textarea id="editor1" name="al_oldalak_1" title="">
                    <?php
                    foreach ($_POST as $value) {
                        $str2 = substr($value, 0);
                        $str3 = substr_replace($str2, "", 2) . "\n";
                        $data = str_replace(".","",$str3,$i);
                    }
                    include_once 'alOldal.php';
                    $leker = new namespace\fodinhome\alOldal();
                    $data = (isset($data)) ? $data : NULL;
                    $beker = $leker->runQuery("SELECT * FROM aloldalak WHERE al_oldalak_id = ".$data." ");
                    $beker->execute([]);
                    $kertadat = $beker->fetch(PDO::FETCH_ASSOC);
                    $adat = (isset($kertadat['al_oldalak_1'])) ? $kertadat['al_oldalak_1'] : NULL;
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
    <textarea id="editor5" name="al_oldalak_2" title="">
                    <?php
                    $adat = (isset($kertadat['al_oldalak_2'])) ? $kertadat['al_oldalak_2'] : NULL;
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

