<?php include_once 'head.php';
Head();
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
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <form method="post" action="oldalak_rogzit.php">
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
                <span><i class="fas fa-arrow-alt-circle-right"></i></span>
                <textarea id="editor1" name="oldalak_szoveg_en_1" title="">
                   <?php
                   foreach ($_GET as $value => $key) {
                       $str2 = substr($value, 0);
                       $str3 = substr_replace($str2, "", 1) . "\n";
                   }
                   include_once 'OldalakPdo.php';
                   $leker = new namespace\fodinhome\OldalakPdo();
                   $data = (isset($str3)) ? $str3 : NULL;
                   $beker = $leker->runQuery("SELECT * FROM oldalak WHERE oldalak_id =  ".$data." ");
                   $beker->execute([]);
                   $kertadat = $beker->fetch(PDO::FETCH_ASSOC);
                   $adat = (isset($kertadat['oldalak_szoveg_en_1'])) ? $kertadat['oldalak_szoveg_en_1'] : NULL;
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
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card spur-card">
                        <div class="fodinhome1-card-header">
                            <?php foreach ($_GET as $value => $key) {
                                $str2 = substr($value, 4);
                                echo  $str3 = substr_replace($str2, "", 7) . "\n";
                            } ?> szerkesztése angolul
                        </div>
                        <span><i class="fas fa-arrow-alt-circle-right"></i></span>
                        <textarea id="editor2" name="oldalak_szoveg_en_2" title="">
                    <?php
                    $adat = (isset($kertadat['oldalak_szoveg_en_2'])) ? $kertadat['oldalak_szoveg_en_2'] : NULL;
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
                            <?php foreach ($_GET as $value => $key) {
                                $str2 = substr($value, 4);
                                echo  $str3 = substr_replace($str2, "", 7) . "\n";
                            } ?> szerkesztése angolul
                        </div>
                        <span><i class="fas fa-arrow-alt-circle-right"></i></span>
                        <textarea id="editor3" name="oldalak_szoveg_en_3" title="">
                  <?php
                  $adat = (isset($kertadat['oldalak_szoveg_en_3'])) ? $kertadat['oldalak_szoveg_en_3'] : NULL;
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
                            <?php foreach ($_GET as $value => $key) {
                                $str2 = substr($value, 4);
                                echo  $str3 = substr_replace($str2, "", 7) . "\n";
                            } ?> szerkesztése angolul
                        </div>
                        <span><i class="fas fa-arrow-alt-circle-right"></i></span>
                        <textarea id="editor4" name="oldalak_szoveg_en_4" title="">
                    <?php
                    $adat = (isset($kertadat['oldalak_szoveg_en_4'])) ? $kertadat['oldalak_szoveg_en_4'] : NULL;
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
        <div class="card spur-card">
            <div class="fodinhome1-card-header">
                <?php foreach ($_GET as $value => $key) {
                    $str2 = substr($value, 4);
                    echo  $str3 = substr_replace($str2, "", 7) . "\n";
                } ?> szerkesztése angolul
            </div>
            <span><i class="fas fa-arrow-alt-circle-right"></i></span>
            <textarea id="editor5" name="oldalak_szoveg_en_5" title="">
                    <?php
                    $adat = (isset($kertadat['oldalak_szoveg_en_5'])) ? $kertadat['oldalak_szoveg_en_5'] : NULL;
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
                <input type="hidden" name="al_oldalak_id" value="<?php
                foreach ($_GET as $value => $key) {
                    $str2 = substr($value, 0);
                    echo  $str3 = substr_replace($str2, "", 1) . "\n";
                }
                ?>" >
                <br>
                <button class="btn btn-success pull-left" id="btn-rogzit" name="btn-rogzit" value="rogzitIndexEn"
                        type="submit" onclick="myfunction">Rögzít
                </button>
                <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza"
                        type="submit" onclick="myfunction"><a href="oldalak.php" style="color: white"> Vissza </a>
                </button>
            </form>
    </div>
</div>

