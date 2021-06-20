<?php
include_once 'head.php';
include_once 'class.user.php';
$auth_user = new USER();
    $i = (isset($_GET['id'])) ? $_GET['id'] : 0;
    $auth_user->delete($i);
    ob_start();
    header("Location: felhasznalok.php?name=sikerult");
    ob_end_flush();
?>