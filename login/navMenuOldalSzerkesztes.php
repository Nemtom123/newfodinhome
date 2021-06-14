<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2021. 06. 10.
 * Time: 14:52
 */
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-4">
            <form method="post" class="form-signin">
                <!-- Select tartalmazza selectpicker   class="selectpicker" data-live-search="true" name="jav" onChange="this.form.submit()" -->
                <select data-toggle="dropdown" style="width:440px; background-color: yellow" class="selectpicker"
                        data-live-search="true" name="jav" onChange="this.form.submit()" title="">
                    <option value="" style="width:440px">Menü szerkesztés</option>
                    <option value="0" style="width:440px" name="elnevezes" placeholder="elnevezés"
                            onChange="this.form.submit()">Új menü felvétele
                    </option>
                    <?php
                    $user = new fodinhome\NaviClass();
                    $stmt = $user->runQuery("SELECT * FROM navmenu ");
                    $stmt->execute();
                    $i = '1';
                    while ($sor = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        print "<option style='width:440px' value='" . $sor['nav_id'] . "' >" . $sor['elnevezes'] . ' ' . $i++ . "</option>";
                    }
                    ?>
                </select>
            </form>
        </div>
    </div>
</div>