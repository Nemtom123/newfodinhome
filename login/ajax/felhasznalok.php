<?php
include_once '../class.user.php';
$auth_user = new USER();
$eredmeny_tomb = array();
$eredmeny_tomb['data'] = array();

$iTotalRecords = 0;
$iTotalDisplayRecords = 0;
$sEcho = 0;
$sColumns = "";

$stmt = $auth_user->runQuery("SELECT * FROM users");
$stmt->execute(array());

while ($sor = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $iTotalRecords++;
    $iTotalDisplayRecords++;
    array_push($eredmeny_tomb['data'], array(
        "user_id" => $sor['user_id'],
        "user_name" => $sor['user_name'],
        "user_email" => $sor['user_email'],
        "user_pass" => $sor['user_pass'],
        "DT_RowId" => $sor['user_id']
    ));
}

$eredmeny_tomb['iTotalRecords'] = $iTotalRecords;
$eredmeny_tomb['iTotalDisplayRecords'] = $iTotalDisplayRecords;
$eredmeny_tomb['sEcho'] = $sEcho;
$eredmeny_tomb['sColumns'] = $sColumns;

print json_encode($eredmeny_tomb);
?>