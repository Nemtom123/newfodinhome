<?php
include_once './Kozos.php';
include_once './PDOSQL.php';
$FelhasznaloNev = Beallitas_POST("inputEmail", "");
$Jelszo = Beallitas_POST("inputPassword", "");
$user_id = 0;
$BeosztasID = 0;
$TeljesNev  ="";
$location = "Location:index.php";


$PDOSQL = new PDOSQL("MsSql");
$PDOSQL->Kapcsolodas();
$lekerdezes = "select * from  [dbo].[UserLogin]('".$FelhasznaloNev."','".$Jelszo."')";
$PDOSQL->Lekerdezes($lekerdezes);
while ( $a = $PDOSQL->fetch_array() ){
        $user_id = $a['ID'];
        $TeljesNev = $a['TeljesNev'];
		$BeosztasID = $a['BeosztasID'];
}
$PDOSQL->KapcsolatLezaras();

$_SESSION['user_id'] = $user_id;
$_SESSION['TeljesNev'] = $TeljesNev;
$_SESSION['BeosztasID'] = $BeosztasID;

if ( $user_id*1 > 0){
    $location  = "Location:dashboard.php";
}

ob_start();
header($location);
ob_end_flush();
?>