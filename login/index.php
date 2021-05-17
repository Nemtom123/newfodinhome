<?php
require_once("class.user.php");
session_start();
$login = new USER();
if ($_SERVER['QUERY_STRING'] == ''){
  //  $login->redirectlogin('index.php');
}
if ($login->is_loggedin() != "") {
    $login->redirectlogin('dashboard.php');
}

if (isset($_POST['btn-loginka'])) {
    $uname = strip_tags($_POST['txt_uname_email']);
    $umail = strip_tags($_POST['txt_uname_email']);
    $upass = strip_tags($_POST['txt_password']);

    if ($login->doLoginka($uname, $umail, $upass)) {
        $login->redirectlogin('dashboard.php');
    } else {

        $error = "Ez most nem jött össze !";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>FODINHOME KFT</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../bootstrap-4.5.3-dist/css/bootstrap-grid.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body class="hatter">
<div class="card text-center kozep">
  <div class="card-header">
    FODINHOME KFT BEJELENTKEZÉSI FELÜLET!
  </div>
  <div class="card-body">
        <div class="signin-form">
            <div class="container">
                <form class="form-signin" method="post" id="login-form" action="">
                    <div class="hr-sect">
                        FODINHOME KFT
                    </div>
                    <h2 class="form-signin-heading">Bejelentkezés.</h2>
                    <hr/>
                    <div id="error">
                            <?php
                                if (isset($error)) {
                            ?>
                            <div class="alert alert-danger">
                                <span class="glyphicon glyphicon-warning-sign" style="font-style: italic;"></span> &nbsp;
                            <?php echo $error . $uname . $upass; ?> !
                            </div>
                         <?php } ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="txt_uname_email"  placeholder="Felhasználó név  vagy Email cím" required/>
                        <span id="check-e"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="txt_password"  placeholder="Jelszó"/>
                    </div>
                    <hr/>
                    <div class="form-group">
                            <button type="submit" name="btn-loginka" class="buttons btn btn-success">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp;
                            Bejelentkezés
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  <div class="card-footer text-muted">
    Bejelentkezés 
  </div>
</div>
</body>








