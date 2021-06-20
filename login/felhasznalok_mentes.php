<?php
include_once 'head.php';

include_once 'class.user.php';
$auth_user = new USER();
if ($_POST['id'] == '') {

    $b = (string)$_POST['user_name'] ? $_POST['user_name'] : 0;
    $mail = (string)$_POST['user_email'] ? $_POST['user_email'] : 0;
    // $i = password_hash((isset($_POST['user_pass'])) ? $_POST['user_pass'] : 0, PASSWORD_DEFAULT);
    $i = (isset($_POST['user_pass'])) ? $_POST['user_pass'] : 0;
    $auth_user->register($b,$mail, $i);
    ob_start();
    header("Location: felhasznalok.php?name=sikerult");
    ob_end_flush();
}

if (isset($_POST['id']) != '') {
    $id = (int)(isset($_POST['id'])) ? $_POST['id'] : NULL;
    $b = (string)(isset($_POST['user_name'])) ? $_POST['user_name'] : 0;
    $mail = (string)(isset($_POST['user_email'])) ? $_POST['user_email'] : 0;
    //$i = password_hash((isset($_POST['user_pass'])) ? $_POST['user_pass'] : 0, PASSWORD_DEFAULT);
    $i = (isset($_POST['user_pass'])) ? $_POST['user_pass'] : 0;
    $auth_user->update($id,$b,$mail, $i);
    ob_start();
    header("Location: felhasznalok.php?name=sikerult");
    ob_end_flush();
}


?>