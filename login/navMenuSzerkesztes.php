<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 06. 10.
 * Time: 14:46
 */
?>

<select class="selectpicker" data-live-search="true" name="replay">
    <?php
    $i = 0;
    $files = glob("../*.php");
    foreach ($files as $value) {
        $str2 = substr($value, 3);
        $str3 = substr_replace($str2, "", -4) . "\n";
        ?>
        <option data-tokens="ketchup mustard" name="valaszt"
          value="<?php echo $i++; "\n"; echo '...'; "\n"; echo $str3; "\n"; ?>"><?php echo $str3; ?></option>
    <?php } ?>
</select>
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


