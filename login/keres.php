<?php include_once 'head.php'; ?>
<link href="bootstrap-4.5.2/dist/css/bootstrap.css" rel="stylesheet"/>
<link href="bootstrap-4.5.2/dist/css/bootstrap-grid.min.css" rel="stylesheet"/>
<link href="bootstrap-4.5.2/dist/css/main.css" rel="stylesheet"/>
<link rel="stylesheet" href="bootstrap-4.5.2/dist/css/fodinhome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap-select-1.13.14/dist/css/bootstrap-select.css">
<body>
<?php
Menu();
echo '<hr>';
ob_start();
?>
<body>
<body class="" onload="startTime()" style="background-color: #f1eae0">
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
                                <option data-tokens="ketchup mustard" name="valaszt"
                                        value="<?php echo $i++; "\n";
                                        echo '...'; "\n";
                                        echo $str3; "\n"; ?>">
                                    <?php echo $str3; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </form>
                    <?php
                    if (isset($_POST['jav'])) {
                        foreach ($_POST as $value) {
                            try { ?>
                                <form method="post" action="menedzseles.php" class="signin-form" id="wood">
                                    <br><br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="metaleiras"
                                               placeholder="description"
                                               value="" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="metaoldal"
                                               placeholder="description"
                                               value="<?php echo $_POST['jav']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="metaoldal"
                                               placeholder="description"
                                               value="<?php echo $_POST['jav']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="metaleiras2"
                                               placeholder="keywords"
                                               value="" required>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr/>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info pull-left" name="btn-signup"
                                                onclick="myFunction()">
                                            <i class="glyphicon glyphicon-open-file" onclick="myFunction()"></i>&nbsp;Rögzít
                                        </button>
                                        <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza"
                                                type="submit" onclick="myfunction"><a href="dashboard.php" style="color: white"> Vissza </a>
                                        </button>
                                    </div>
                                </form>
                                <?php
                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            }
                        }
                    }

                    ?>
                    <?php
                    if (isset($_POST['btn-signup'])) {
                        $bedob = new vip\MetaClass();
                        try{
                            foreach ($_POST as $value){
                                $tomb1 = $_POST['metaleiras'];
                                $tomb2 = $_POST['metaleiras2'];
                                $tomb3 = $_POST['metaoldal'];
                                $tomb4 = $_POST['banner'];
                                $tomb5 = $_POST['h1'];
                                $tomb6 = $_POST['banner2'];
                                $tomb7 = $_POST['banner3'];
                                $bedob->UpdateMeta($tomb1,$tomb2,$tomb3,$tomb4,$tomb5,$tomb6,$tomb7);
                            }


                        } catch (PDOException $e){
                            echo $e->getMessage();
                        }
                        $bedob->redirect('menedzseles.php');
                    }?>
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
                                            <span class="copyright">©
                                                <script>
                                                    document.write(new Date().getFullYear())
                                                </script> <i class="fa fa-heart heart"></i> fodinhome
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

