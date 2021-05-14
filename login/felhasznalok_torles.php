<?php
include_once 'head.php';
include_once 'PDOSQL.php';
//Tamas
$PDOSQL = new PDOSQL("MsSql");
$PDOSQL->Kapcsolodas();

$id = Beallitas_GET("id","0");


$parameteres = array();
array_push($parameteres, array("variable" => ":table_name", "value" => "Felhasznalok"));
array_push($parameteres, array("variable" => ":id", "value" => $id));


$lekerdezes = "EXEC [dbo].[Inaktiv] :table_name, :id ";

$PDOSQL->Execute($lekerdezes, $parameteres);
$PDOSQL->KapcsolatLezaras();


ob_start();
header("Location: felhasznalok.php?name=sikerut");
ob_end_flush();
?>