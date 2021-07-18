<?php
include_once './Kozos.php';
include_once './PDOSQL.php';

//Gabi
$PDOSQL = new PDOSQL("MsSql");
$PDOSQL->Kapcsolodas();



    $id = isset($_SESSION['partner_id']) ? $_SESSION['partner_id'] : NULL;
    $megnevezes = isset($_POST['megnevezes']) ? $_POST['megnevezes'] : NULL;
    $szekhely = isset($_POST['szekhely']) ? $_POST['szekhely'] : NULL;
    $telephely1 = isset($_POST['telephely1']) ? $_POST['telephely1'] : NULL;
    $telephely2 = isset($_POST['telephely2']) ? $_POST['telephely2'] : NULL;
    $arlista_minositesek = isset($_POST['arlista_minositesek_id']) ? $_POST['arlista_minositesek_id'] : NULL;
    $fizetesi_modok = isset($_POST['fizetesi_modok_id']) ? $_POST['fizetesi_modok_id'] : NULL;
    $deviza = isset($_POST['deviza_id']) ? $_POST['deviza_id'] : NULL;
    
    
	$parameteres = array();
	array_push($parameteres, array(
		"variable" => "id", "value" => $id
	));
	
	array_push($parameteres, array(
		"variable" => ":id", "value" => $id
	));

	array_push($parameteres, array(
		"variable" => ":megnevezes", "value" => $megnevezes
	));

	array_push($parameteres, array(
		"variable" => ":szekhely", "value" => $szekhely
	));

	array_push($parameteres, array(
		"variable" => ":telephely1", "value" => $telephely1
	));

	array_push($parameteres, array(
		"variable" => ":telephely2", "value" => $telephely2
	));

	array_push($parameteres, array(
		"variable" => ":arlista_minositesek", "value" => $arlista_minositesek
	));

	array_push($parameteres, array(
		"variable" => ":fizetesi_modok", "value" => $fizetesi_modok
	));	
	
	array_push($parameteres, array(
		"variable" => ":deviza", "value" => $deviza
	));	
	
	$lekerdezes = "EXEC [dbo].[PartnerHozzadas] :id, :megnevezes, :szekhely, :telephely1, :telephely2, :arlista_minositesek, :fizetesi_modok, :deviza  ";
	
	$PDOSQL->Execute( $lekerdezes, $parameteres);

	$PDOSQL->KapcsolatLezaras();


	
	ob_start();
  header("Location: /partnereklekerdezesek.php?name=sikerut");
	ob_end_flush();
?>