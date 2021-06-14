<?php

require_once("error.php");
include_once 'head.php';

ob_start();

include_once("NaviClass.php");
?>
<?php include_once 'navMenuOldalSzerkesztes.php'; ?>
<?php
if (isset($_POST['btn-rogzit'])) {
    try {
        $nav = new fodinhome\NaviClass();
        $nav_id = strip_tags($_POST['nav_id']);
        $elnevezes = $_POST['elnevezes'];
        $elnevezes1 = $_POST['elnevezes_en'];
        $javit = $nav->runQuery("SELECT * FROM navmenu WHERE nav_id= :nav_id");
        $javit->execute(array(":nav_id" => $nav_id));
        $sor = $javit->fetch(PDO::FETCH_ASSOC);
        if ($nav_id <= '50' and $nav_id != '0' and $nav_id != '' and $sor['nav_id'] != $nav_id) {
            $nav->NaviRogzit($nav_id, $elnevezes, $elnevezes1);
        } else {
            $nav->NviUpDate($nav_id, $elnevezes, $elnevezes1);
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   // $nav->redirect('navigacio.php?joined');
    echo '<div class="alert alert-info" style="color:orange"> <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres rögzítés </div>';
}
?>
<?php
if (isset($error)) {
    foreach ($error as $value) {
        ?>
        <div class="alert alert-danger">
            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
        </div>
        <?php
    }
} else if (isset($_GET['joined'])) {
    ?>
    <div class="alert alert-info">
        <i class="glyphicon glyphicon-log-in">Sikeres átírás</i>
    </div>
    <?php
}
?>
<form method="post" class="form-signin">
    <?php
    $nav = new \fodinhome\NaviClass();
    if (isset($_POST['jav'])) {
    $nav_id = $_POST['jav'];
    $javit = $nav->runQuery("SELECT * FROM navmenu WHERE nav_id= :nav_id");
    $javit->execute(array(":nav_id" => $nav_id));
    $sor = $javit->fetch(PDO::FETCH_ASSOC);
    $le = $nav->runQuery("SELECT * FROM navmenu");
    $le->execute([]);
    $be = $le->rowCount();
    ?>
    <?php

    if ($_POST['jav'] == '0') { ?>
        <div class="form-group">
            <input type="hidden" class="form-control" name="nav_id" placeholder="nav_id"
                   value="<?php echo $be + 1; ?>" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="elnevezes" placeholder="Elnevezés"
                   <?php $elnevezes = (isset($sor['elnevezes'])) ? $sor['elnevezes'] : null; ?>
                   value="<?php echo $elnevezes; ?>" required>
        </div>
    <?php } else { ?>
        <div class="form-group">
            <input type="hidden" class="form-control" name="nav_id" placeholder="nav_id"
                   value="<?php echo $sor['nav_id']; ?>" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="elnevezes" placeholder="Elnevezés"
                   value="<?php echo $sor['elnevezes'];; ?>" required>
        </div>
    <?php }
    $elnevezes_en = (isset($sor['elnevezes_en'])) ? $sor['elnevezes_en'] : null;
    ?>


    <div class="form-group">
        <input type="text" class="form-control" name="elnevezes_en" placeholder="Angol"
               value="<?php echo $elnevezes_en; ?>">
    </div>
    <div class="clearfix"></div>
    <hr/>
    <br>
    <br>
    <button class="btn btn-success pull-left" id="btn-rogzit" name="btn-rogzit" value="rogzit"
            type="submit" onclick="myfunction">Rögzít
    </button>

    <button class="btn btn-info pull-right" id="btn-rogzit" name="btn-rogzit" value="vissza"
            type="submit" onclick="myfunction"><a href="oldalak.php" style="color: white"> Vissza </a>
    </button>
    <br/>
</form>

<?php
}
?>


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


