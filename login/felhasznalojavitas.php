<?php include_once 'vedelem.php' ?>
<body>
<div class="dash">
    <div class="dash-nav dash-nav-dark">
        <header>
            <a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="home.php" class="spur-logo"><i class="fas fa-address-book"></i> <span>W.A.T.B</span></a>
        </header>
        <nav class="dash-nav-list">
            <a href="home.php" class="dash-nav-item"><i
                        class="fas fa-kiwi-bird"></i>Üdv <?php echo $userRow['user_name'] ?> :)</a>
            <a href="kalendar/index.php" class="dash-nav-item">
                <i class="fas fa-user"></i> Beosztások </a>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-chart-bar"></i> Jelszavak </a>
                <div class="dash-nav-dropdown-menu">
                    <a href="pin.php" class="dash-nav-dropdown-item"> Pin </a>
                </div>
                <div class="dash-nav-dropdown-menu">
                    <a href="sign-up.php" class="dash-nav-dropdown-item"> Új felhasználó </a>
                </div>
                <div class="dash-nav-dropdown-menu">
                    <a href="felhasznalojavitas.php" class="dash-nav-dropdown-item"> Elfelejtett </a>
                </div>
                <div class="dash-nav-dropdown-menu">
                    <a href="dorp.php" class="dash-nav-dropdown-item"> Törlés </a>
                </div>
            </div>
            <hr>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-cube"></i>Home Oldal</a>
                <div class="dash-nav-dropdown-menu">
                    <a href="banner.php" class="dash-nav-dropdown-item">Banner kép</a>
                    <a href="banner_promo.php" class="dash-nav-dropdown-item">Banner szöveg</a>
                    <a href="home_elso.php" class="dash-nav-dropdown-item">Első blokk</a>
                    <a href="home_masodik.php" class="dash-nav-dropdown-item">Másdikblokk</a>
                    <a href="home_harmadik.php" class="dash-nav-dropdown-item">Harmadik blokk</a>
                    <a href="home_negyedik.php" class="dash-nav-dropdown-item">Negyedik blokk</a>
                    <a href="home_otodik.php" class="dash-nav-dropdown-item">Ötödik blokk</a>
                    <a href="home_hatodik.php" class="dash-nav-dropdown-item">Hatodik blokk</a>
                    <a href="home_hetedik_oldal.php" class="dash-nav-dropdown-item">Hetedik blokk</a>
                    <a href="home_footer.php" class="dash-nav-dropdown-item">Footer</a>
                </div>
            </div>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-cube"></i>Oldalak</a>
                <div class="dash-nav-dropdown-menu">
                    <a href="" class="dash-nav-dropdown-item" style="color: yellow">-- GEN. LAK oldal --</a>
                    <a href="gen_ablak_1.php" class="dash-nav-dropdown-item">Szerkesztés</a>
                    <a href="gen_ablak_2.php" class="dash-nav-dropdown-item">Bemutató oldal</a>
                    <a href="gen_ablak_2_de.php" class="dash-nav-dropdown-item">Német bemutató</a>
                    <a href="gen_ablak_2_en.php" class="dash-nav-dropdown-item">Angol bemutató</a>
                    <a href="gen_ablak_2_es.php" class="dash-nav-dropdown-item">Spanyol bemutató</a>
                    <a href="gen_ablak_2_fr.php" class="dash-nav-dropdown-item">Francia bemutató</a>
                    <a href="gen_ablak_2_sk.php" class="dash-nav-dropdown-item">Szlovák bemutató</a>
                    <a href="gen_ablak_2_ru.php" class="dash-nav-dropdown-item">Orosz bemutató</a>
                </div>
            </div>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-cube"></i>Egyebek</a>
                <div class="dash-nav-dropdown-menu">
                    <a href="gdpr.php" class="dash-nav-dropdown-item">GDPR</a>
                    <a href="munkatarsak.php" class="dash-nav-dropdown-item">Munkatársak</a>
                    <a href="gyik.php" class="dash-nav-dropdown-item">GYIK</a>
                </div>
            </div>
            <div class="dash-nav-dropdown">
                <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fas fa-cube"></i>Navi és Kont</a>
                <div class="dash-nav-dropdown-menu">
                    <a href="navigacio.php" class="dash-nav-dropdown-item">Navi</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="dash-app">
        <header class="dash-toolbar">
            <a href="#!" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="#!" class="searchbox-toggle">
                <i class="fas fa-search"></i>
            </a>
            <form class="searchbox" action="#!">
                <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                <button type="submit" class="searchbox-submit"><i class="fas fa-search"></i></button>
                <input type="text" class="searchbox-input" placeholder="Keresés">
            </form>
            <div class="tools">
                <a href="../index.php" target="_blank" class="tools-item">
                    <i class="fas fa-home"></i>
                </a>
                <div class="dropdown tools-item">
                    <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="#!"><i class="fas fa-male"> Profil</i></a>
                        <a class="dropdown-item" href="logout.php?logout=true"><i class="fas fa-door-open">Kilépés</i></a>
                    </div>
                </div>
            </div>
        </header>

<?php include_once 'felhasznalo-jav-form.php'; ?>
<?php
if (isset($_POST['btn-signup'])) {
    $user_id = strip_tags($_POST['txt_id']);
    $uname = strip_tags($_POST['txt_uname']);
    $umail = strip_tags($_POST['txt_umail']);
    $upass = strip_tags($_POST['txt_upass']);

    if ($uname == "") {
        $error[] = "Használatban a felhasználói név !";
    } else if ($umail == "") {
        $error[] = "Használatban email id !";
    } else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Kérlek valós email címet adj meg !';
    } else if ($upass == "") {
        $error[] = "Foglalt  password !";
    } else if (strlen($upass) < 8) {
        $error[] = "8 betűt és számot írj kérlek";
    } else {
        try {
            $user = new USER();
            $stmt = $user->runQuery("SELECT user_name, user_email FROM users WHERE user_name=:uname OR user_email=:umail");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);


            if ($row['user_name'] != $uname) {
                echo '<div class="alert alert-light" style="color:orange; background-color:white; text-align: center;">
                 <i class="glyphicon glyphicon-log-in"></i> &nbsp; Új felhsználót vigyél fel kérlek "Login/Felhasználó" !!!
                    </div>';
                echo "<script>alert(' Új felhsználót vigyél fel kérlek \"Login/Felhasználó\" !!!');</script>";
                $error[] = "Még nem regisztrált email !";
            } else if ($row['user_email'] != $umail) {
                echo '<div class="alert alert-light" style=" background-color:white; color:orange; text-align: center;">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Új felhsználót vigyél fel kérlek "Login/Új jelszó" !!!
				</div>';
                echo "<script>alert(' Új felhsználót vigyél fel kérlek, köszönöm!!!');</script>";
                $error[] = "Még nem regisztrált email !";
            } else if ($row['user_email'] == $umail and $uname == $row['user_name'] and $sor['user_pass'] == $upass) {
                echo '<div class="alert alert-light" style=" background-color:white; color:orange; text-align: center;">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Új felhsználót vigyél fel kérlek "Login/Felhasználó" !!!
				</div>';
                echo "<script>alert(' Új felhsználót vigyél fel kérlek, köszönöm!!!');</script>";
                $error[] = "Még nem regisztrált email !";
            } else {
                if ($user->update($user_id, $uname, $umail, $upass)) {
                  echo '<div class="alert alert-info" style="color:orange"> <i class="glyphicon glyphicon-log-in"></i> &nbsp; Sikeres jelszó frissítés </div>';
                   // $user->redirectlogin('sign-up.php?joined');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
<form method="post" class="form-signin">
    <?php
    if (isset($_POST['jav'])) {
    $user_id = $_POST['jav'];
    $javit = $auth_user->runQuery("SELECT * FROM users WHERE user_id= :user_id");
    $javit->execute(array(":user_id" => $user_id));
    $sor = $javit->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="form-group">
        <input type="hidden" class="form-control" name="txt_id"
               placeholder="Felhasználó neve"
               value="<?php echo $sor['user_id']; ?>" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="txt_uname"
               placeholder="Felhasználó neve"
               value="<?php echo $sor['user_name']; ?>" required>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="txt_umail"
               placeholder="E-Mail"
               value="<?php echo $sor['user_email']; ?>" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="txt_upass"
               value=""
               placeholder="Password" required>
    </div>
    <div class="clearfix"></div>
    <hr/>
    <div class="form-group">
        <button type="submit" class="btn btn-danger alertdemo" name="btn-signup"
                onclick="myFunction()">
            <i class="glyphicon glyphicon-open-file" onclick="myFunction()"></i>&nbsp;Új
            jelszó rögzítése
        </button>
    </div>
    <br/>

</form>

<?php
}
?>

</body>
<?php include_once 'script.php'; ?>

