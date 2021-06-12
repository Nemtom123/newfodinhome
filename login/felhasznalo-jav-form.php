<main class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 offset-sm-3">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="spur-card-title"> Elfelejtett jelszó</div>
                    </div>
                    <div class="card-body ">
                        <form method="post" class="form-signin">
                            <?php
                            if (isset($error)) {
                                foreach ($error as $kak) {
                                    ?>
                                    <div class="alert alert-danger">
                                        <i class="glyphicon glyphicon-warning-sign"></i>
                                        &nbsp; <?php echo $kak; ?>
                                    </div>
                                    <?php
                                }
                            } else if (isset($_GET['joined'])) {
                                ?>
                                <div class="alert alert-info">
                                    <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres
                                    regisztráció

                                </div>
                                <?php
                            }
                            ?>
                            <select title="" class="form-control" id="sel1" name="jav"
                                    onChange="this.form.submit()">
                                <option value="">Frissítés</option>
                                <?php
                                $user = new USER();
                                $stmt = $user->runQuery("SELECT * FROM users");
                                $stmt->execute(array());
                                while ($sor = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    print "<option value='" . $sor['user_id'] . "' >" . $sor['user_name'] . "</option>";
                                }
                                ?>
                            </select>
                        </form>




