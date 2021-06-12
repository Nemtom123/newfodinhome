<?php
include_once './Kozos.php';
include_once './PDOSQL.php';

$id = Beallitas_GET("id", "0");
$_SESSION['partner_id'] = $id;

Fejlec();
Menu();
print "<div class=\"container\">";

$partner = array();
$arlista_minositesek = array();
$fizetesi_modok = array();
$deviza = array();


$PDOSQL = new PDOSQL("MsSql");
$PDOSQL->Kapcsolodas();

$lekerdezes = "select * from  [dbo].[Partnerek] WHERE [id] = ".$id."";
$PDOSQL->Lekerdezes($lekerdezes);
while ( $a = $PDOSQL->fetch_array() ){
    $partner = $a;
}

$lekerdezes = "select * from  [dbo].[Arlista_minositesek] ";
$PDOSQL->Lekerdezes($lekerdezes);
while ( $a = $PDOSQL->fetch_array() ){
    array_push($arlista_minositesek, $a);
}

$lekerdezes = "select * from  [dbo].[Fizetesi_modok] ";
$PDOSQL->Lekerdezes($lekerdezes);
while ( $a = $PDOSQL->fetch_array() ){
    array_push($fizetesi_modok, $a);
}

$lekerdezes = "select * from  [dbo].[Deviza] ";
$PDOSQL->Lekerdezes($lekerdezes);
while ( $a = $PDOSQL->fetch_array() ){
    array_push($deviza, $a);
}



    print "<form method=\"POST\" action=\"partnermentes.php\" >";
    print "<table id=\"Table\" class=\"display cell-border\">
            <tbody>
                    <tr><td>Megnevzés</td><td><input name='megnevezes' type=\"text\" class=\"form-control sm\" value=\"".( isset($partner['megnevezes']) ? $partner['megnevezes'] : ""  )."\"></td></tr>
                            <tr><td>Székhely</td><td><input name='szekhely' type=\"text\" class=\"form-control sm\" value=\"".( isset($partner['szekhely']) ? $partner['szekhely'] : ""  ) ."\"></td></tr>
                            <tr><td>Telephely 1</td><td><input name='telephely1' type=\"text\" class=\"form-control sm\" value=\"".( isset($partner['telephely1']) ? $partner['telephely1'] : ""  )."\"></td></tr>
                            <tr><td>Telpehely 2</td><td><input name='telephely2' type=\"text\" class=\"form-control sm\" value=\"".( isset($partner['telephely2']) ? $partner['telephely2'] : ""  )."\"></td></tr>
                            <tr><td>Árlista minősítések</td><td>
                                <select name=\"arlista_minositesek_id\" class=\"form-control\" > ";
                                foreach ($arlista_minositesek as $object) {
                                     print "<option value=\"".$object['id']."\" ".( $object['id']*1 === $partner['arlista_minositesek_id']*1 ? " selected " : "" )." >".$object['megnevezes']."</option>";
                                }
                                print "</select>
                            </td></tr> 
                            <tr><td>Fizetési Módok</td><td>
                            <select name=\"fizetesi_modok_id\" class=\"form-control\" > ";
                                foreach ($fizetesi_modok as $object) {
                                     print "<option value=\"".$object['id']."\" ".( $object['id']*1 === $partner['fizetesi_modok_id']*1 ? " selected " : "" )." >".$object['megnevezes']."</option>";
                                }                                
                            print " </select>
                            </td></tr>
                            <tr><td>Deviza</td><td> 
                            <select name=\"deviza_id\" class=\"form-control\" > ";
                                foreach ($deviza as $object) {
                                     print "<option value=\"".$object['id']."\" ".( $object['id'] === $partner['deviza_id'] ? " selected " : "" )." >".$object['megnevezes']."</option>";
                                }                              
                            print " </select>
                            </td></tr>
                            <tr><td><button name='rogzit'  class=\"btn btn-success\">Rögzít</button></td></tr>
                   
                    </tr>            
            </tbody>
    </table>";
  print "</form>";  
print "</div>";
	print "<pre>";
		print_r($_SESSION);
		print session_id();
	print "<pre>";

Lablec();
?>
