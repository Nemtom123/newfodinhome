<?php
include_once 'head.php';
include_once 'PDOSQL.php';
$PDOSQL = new PDOSQL("MsSql");
$PDOSQL->Kapcsolodas();

$id = isset($_SESSION['id']) ? $_SESSION['id'] : NULL;
$id = (int)$id;
$b = (string)$_POST['TeljesNev'] ? $_POST['TeljesNev'] : 0;
$i = (int)$_POST['Beosztas'] ? $_POST['Beosztas'] : 0;
$parameteres = array();
array_push($parameteres, array("variable" => "id", "value" => $id));
array_push($parameteres, array("variable" => "TeljesNev", "value" => $b));
array_push($parameteres, array("variable" => "BeosztasID", "value" => $i));
$lekerdezes = "EXEC [dbo].[FelhasznalokFelvitele] :id, :TeljesNev, :BeosztasID";

$PDOSQL->Execute($lekerdezes, $parameteres);
$PDOSQL->KapcsolatLezaras();

ob_start();
header("Location: felhasznalok.php?name=sikerult");
ob_end_flush();
?>