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
 <!--     Fonts and icons     -->
 <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
<?php
Menu();
echo '<hr>';
ob_start();
?>
<body class="" onload="startTime()" style="background-color: #f1eae0">
<div class="content">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">Képcsere</h5>
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
                            <option value="">Képek mappa választás</option>
                            <?php
                            $dirs = glob("../images/*", GLOB_ONLYDIR);
                            foreach ($dirs as $val) {
                                $str2 = substr($val, 10);
                                echo '<option value="' . $str2 . '">' . $str2 . "</option>\n";
                            }
                            ?>
                        </select>
                    </form>
                    <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center mb-5 pb-3">
                                <div class="col-md-12 heading-section ftco-animate text-center">

                                </div>
                            </div>
                            <div class="row">
                                <?php
                                foreach ($_POST as $value) {
                                $gallery = glob('../images/' . $value . '/' . '*');

                                // shuffle($kepek);
                                if ($gallery): ?>
                                    <?php $i = 0;
                                    foreach ($gallery as $gall => $valami):
                                        if (!isset($counter)) {
                                            $counter = 0;
                                        }
                                        $szam = $counter++;
                                        $number = "10000" . $szam + 1; ?>
                                        <div class="col-md-4">
                                            <a data-target="" data-slide-to="<?php echo $i; ?>">
                                                <img class="single-image" data-toggle="modal"
                                                     style="width: 300px; height: 300px"
                                                     data-target="#gallerymodal"
                                                     src="<?php echo $valami ?>" title="<?php echo $gallery[$gall] ?>"/>
                                            </a>
                                            <div class="modal-footer">
                                                <p>
                                                    <?php
                                                    echo $str2 = substr($valami, 10) . "\n";
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php $i++; endforeach; ?>
                                <?php endif;
                                ?>

                            </div>
                        </div>
                    </section>
                    <div class="dropzone" style="height: 800px" id="myDropzone"></div>
                    <script>
                        Dropzone.autoDiscover = false;
                        Dropzone.options.myDropzone = {
                            url: "kepekcsere<?php echo $value ?>_form.php",
                            data: {value: '<?php echo $value ?>'},
                            thumbnailWidth: null,
                            thumbnailHeight: null,
                            init: function () {
                                this.on("thumbnail", function (file, dataUrl) {
                                    $('.dz-image').last().find('img').attr({width: '100%', height: '100%'});
                                }),
                                    this.on("success", function (file) {
                                        $('.dz-image').css({"width": "100%", "height": "auto"});
                                    })
                            }
                        };

                        var myDropzone = new Dropzone('div#myDropzone');
                    </script>
                    <?php } ?>
                
                    <footer class="footer footer-black  footer-white ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="credits ml-auto">
              <span class="copyright">
                © Fodinhome Kft <?php setlocale(LC_ALL,'hungarian.UTF-8');	echo strftime("%Y %B %d %A", time()); ?>
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
