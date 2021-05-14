<?php
include_once '../PDOSQL.php';
$PDOSQL = new PDOSQL("MsSql");
$eredmeny_tomb = array();
$eredmeny_tomb['data'] = array();

$iTotalRecords = 0;
$iTotalDisplayRecords = 0;
$sEcho  = 0;
$sColumns = "";

$PDOSQL->Kapcsolodas();
$lekerdezes = "select * from [dbo].[PartnerLista]()";
$PDOSQL->Lekerdezes($lekerdezes);
while ( $a = $PDOSQL->fetch_array() ){
    $iTotalRecords++;
    $iTotalDisplayRecords++;
    array_push($eredmeny_tomb['data'],array(
       "megnevezes"=>$a['megnevezes'],
        "szekhely"=>$a['szekhely'],
        "telephely1"=>$a['telephely1'],
        "telephely2"=>$a['telephely2'],
        "deviza"=>$a['deviza_id'],
        "arlista_minositesek_megnevezes"=>$a['arlista_minositesek_megnevezes'],
        "fizetesi_modok_megnevezes"=>$a['fizetesi_modok_megnevezes'],
        "DT_RowId"=>$a['id']
    ));
}
$eredmeny_tomb['iTotalRecords'] = $iTotalRecords;
$eredmeny_tomb['iTotalDisplayRecords'] = $iTotalDisplayRecords;
$eredmeny_tomb['sEcho'] = $sEcho;
$eredmeny_tomb['sColumns'] = $sColumns;
$PDOSQL->KapcsolatLezaras();
print json_encode($eredmeny_tomb); 
?>