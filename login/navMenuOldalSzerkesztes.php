<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 06. 10.
 * Time: 14:52
 */
?>

<div class="card spur-card">
    <div class="fodinhome1-card-header">
        <?php foreach ($_POST as $value) { echo substr($value, 1); } ?> szerkesztése
    </div>
    <span><i class="fas fa-arrow-alt-circle-right" ></i></span>
    <textarea id="editor1" name="oldalak_szoveg" title="">
                    <?php
                    //                    include_once 'Oldlalak.php';
                    //                   $leker = new namespace\watb\Oldlalak();
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


