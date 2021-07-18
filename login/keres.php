<?php
include_once 'head.php';
?>
<link href="bootstrap-4.5.2/dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-4.5.2/dist/css/bootstrap-grid.min.css" rel="stylesheet" />
<link href="bootstrap-4.5.2/dist/css/main.css" rel="stylesheet" />
<link rel="stylesheet" href="bootstrap-4.5.2/dist/css/fodinhome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-select-1.13.14/dist/css/bootstrap-select.css">

<body class="" onload="startTime()" style="background-color: #f1eae0">
    <?php
    Menu();
    echo '<hr>';
    ob_start();
    ?>
    <div class="content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Fodinhome oldal menedzselés</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" class="form-signin" id="foo">
                            <?php
                            if (isset($error)) {
                                foreach ($error as $error) {
                            ?>
                                    <div class="alert alert-danger">
                                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                                    </div>
                                <?php
                                }
                            } else if (isset($_GET['joined'])) {
                                ?>
                                <div class="alert alert-info">
                                    <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeresen rögzítetted
                                </div>
                            <?php
                            }
                            ?>
                            <label for="sel1"></label>
                            <select class="form-control" id="sel1" name="jav" onChange="this.form.submit()">
                                <option value="">Fájl választás</option>
                                <?php
                                $i = 0;
                                $files = glob("../*.php");
                                foreach ($files as $value) {
                                    $str2 = substr($value, 3);
                                    $str3 = substr_replace($str2, "", -4) . "\n";
                                ?>
                                    <option data-tokens="ketchup mustard" value="<?php echo $i++;
                                                                                    "\n";
                                                                                    echo '...';
                                                                                    "\n";
                                                                                    echo $str3;
                                                                                    "\n"; ?>">
                                        <?php echo $str3; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </form>
                        <?php
                        if (isset($_POST['jav'])) {
                            foreach ($_POST as $value) {
                                try { ?>
                                    <form method="post" action="keres_form.php" class="signin-form" id="wood">
                                        <br><br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="metaoldal" placeholder="description" value="<?php
                                                                                                                                        foreach ($_POST as $value) {
                                                                                                                                            $str2 = substr($value, 4) . "\n";
                                                                                                                                            echo  $str33 = substr_replace($str2, "", 7) . "\n";
                                                                                                                                        }
                                                                                                                                        ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="meta_id" placeholder="description" value="<?php
                                                                                                                                        foreach ($_POST as $value) {
                                                                                                                                            $str2 = substr($value, 0) . "\n";
                                                                                                                                            echo  $str3 = substr_replace($str2, "", 1) . "\n";
                                                                                                                                        }
                                                                                                                                        ?>">
                                        </div>
                                        <?php
                                        foreach ($_POST as $value) {
                                            $str2 = substr($value, 4) . "\n";
                                            $str = substr_replace($str2, "", 7) . "\n";
                                            $data_egy = (isset($str3)) ? $str3 : NULL;
                                            $data = str_replace(".","",$data_egy,$i);
                                        }
                                        include_once 'MetaClass.php';
                                        $leker = new fodinhome\MetaClass();
                                        //echo $data_egy ?? 'Nincs ilyen';
                                        $beker = $leker->runQuery("SELECT * FROM `meta` WHERE `oldalneve` =  ".$data." ");
                                        $beker->execute([]);
                                        $leker = $beker->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="description" value="<?php echo isset($leker['metaleiras']) ? $leker['metaleiras'] : NULL; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="metaleiras2" value="<?php echo  isset($leker['metaleiras2']) ? $leker['metaleiras2'] : NULL; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="metaoldal" placeholder="description" value="<?php echo $_POST['jav']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Banner kép 1" value="<?php echo isset($leker['banner']) ? $leker['banner'] : NULL; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Banner kép 2" value="<?php echo isset($leker['banner2']) ? $leker['banner2'] : NULL; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Banner kép 3"  value="<?php echo isset($leker['banner3']) ? $leker['banner3'] : NULL; ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="H1 szövegrész"  value="<?php echo isset($leker['h1']) ? $leker['h1'] : NULL; ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="metaleiras" placeholder="description" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="metaleiras2" placeholder="keywords" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="banner" placeholder="Banner 1 rész" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="banner2" placeholder="Banner 2 rész" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="banner3" placeholder="Banner 3 rész" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="h1" placeholder="H1 szöveg" value="" required>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr />
                                        <br>
                                        <br>
                                        <button class="btn btn-success pull-left" id="btn-rogzit" name="btn-rogzit" value="rogzitEn" type="submit" onclick="myfunction">Rögzít
                                        </button>
                                        <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza" type="submit" onclick="myfunction"><a href="keres.php" style="color: white"> Vissza </a>
                                        </button>
                                    </form>
                        <?php
                                } catch (PDOException $e) {
                                    echo $e->getMessage();
                                }
                            }
                        }

                        ?>
                        <section class="ftco-section">
                            <div class="container">
                                <div class="row justify-content-center mb-5 pb-3">
                                    <div class="col-md-12 heading-section ftco-animate text-center">

                                    </div>
                                </div>
                                <footer class="footer footer-black  footer-white ">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="credits ml-auto">
                                                <span class="copyright">
                                                    ©
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> <i class="fa fa-heart heart"></i> Fodinhome Kft
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </footer>
                                <!--   Core JS Files   -->
                                <script src="assets/js/core/jquery.min.js"></script>
                                <script src="assets/js/core/popper.min.js"></script>
                                <script src="assets/js/core/bootstrap.min.js"></script>
                                <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
                                <!--  Google Maps Plugin    -->
                                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
                                <!-- Chart JS -->
                                <script src="assets/js/plugins/chartjs.min.js"></script>
                                <!--  Notifications Plugin    -->
                                <script src="assets/js/plugins/bootstrap-notify.js"></script>
                                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                                <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
                                <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
                                <script src="assets/demo/demo.js"></script>
</body>

</html>