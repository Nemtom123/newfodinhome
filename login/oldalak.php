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
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <form method="post" action="oldalak_form.php">
                <div class="">
                    <div class="fodinhome-card-header">
                        Admin felület / oldalak szerkesztése
                    </div>
                    <hr>
                    <?php if (isset($_GET['message']) == 'sikerult') { ?>
                    <div class="alert alert-primary" role="alert">
                        Sikeres rögzítés!
                    </div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="input-group-prepend">
                                <div class="col-md-8 offset-2">
                                    <label class="input-group-text" style="width: " for="validatedInputGroupSelect">Kérlek válasszd ki a
                                        szerkeszteni kívánt oldalt</label>
                                </div>
                                <div class="col-md-4 offset-1">
                                    <select class="selectpicker" data-live-search="true" name="replay">
                                        <?php
                                        $i = 0;
                                        $files = glob("../*.php");
                                        foreach ($files as $value) {
                                            $str2 = substr($value, 3);
                                            $str3 = substr_replace($str2, "", -4) . "\n";
                                            ?>
                                            <option data-tokens="ketchup mustard" name="valaszt"
                                                    value="<?php echo $i++;
                                                    "\n";
                                                    echo '...';
                                                    "\n";
                                                    echo $str3;
                                                    "\n"; ?>"><?php echo $str3; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <br>
                    <div class="col-md-10 offset-5">
                        <button type="submit"
                                class="btn btn-success vertical-center" data-toggle="modal" style="text-align: center"
                                id="btn" onClick="Szerkesztes(0);">
                            <i class="material-icons">&#xE147;</i>
                            <span> Szerkesztem </span>
                        </button>
                    </div>
            </form>
            <div class="valid-feedback">
                Szép munka!
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-select-1.13.14/dist/js/bootstrap-select.js"></script>

<script>
    function createOptions(number) {
        var options = [], _options;

        for (var i = 0; i < number; i++) {
            var option = '<option value="' + i + '">Option ' + i + '</option>';
            options.push(option);
        }

        _options = options.join('');

        $('#number')[0].innerHTML = _options;
        $('#number-multiple')[0].innerHTML = _options;

        $('#number2')[0].innerHTML = _options;
        $('#number2-multiple')[0].innerHTML = _options;
    }

    var mySelect = $('#first-disabled2');

    createOptions(4000);

    $('#special').on('click', function () {
        mySelect.find('option:selected').prop('disabled', true);
        mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
        mySelect.find('option:disabled').prop('disabled', false);
        mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
        liveSearch: true,
        maxOptions: 1
    });
</script>
