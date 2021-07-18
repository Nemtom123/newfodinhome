<?php
include_once './Kozos.php';

Fejlec();
Menu();
if (isset($_GET['name'])){ ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header" style="background-color: #0068BA">
                        <p>Partnerek rögzítése sikeresen megtörtént.</p>
                        <div class="closeMessage"><button class="btn btn-succes"><a href="partnerek.php">Bezár</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }



print "<div class=\"container\">";

    print "<table id=\"Table\" class=\"display cell-border\">
            <thead>
                    <tr>
                            <th>Megnevzés</th>
                            <th>Székhely</th>
                            <th>Telephely 1</th>
                            <th>Telpehely 2</th>
                            <th>Árlista minősítések</th>
                            <th>Fizetési Módok</th>
                            <th>Deviza</th>
                            <th></th>
                    </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                    <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                    </tr>
            </tfoot>
    </table>";
print "</div>";
?>
<script type="text/javascript">
		var custom_toolbar_inputs = "";
		custom_toolbar_inputs += "<input type='button' class='form-control sm' value='Új felvitele' id='btn' onClick='Szerkesztes(0);'>";

		$(document).ready(function () {
			
			$('#Table').dataTable({
					'scrollX': true,
					'scrollY': setDataTableHeight(),
					'scrollCollapse': true,
					'ordering': false,
					'bAutoWidth': true,
					'bSort': false,
					'oSearch': { 'sSearch': '' },
					'columns': [
						{ "data": "megnevezes", "name": "megnevezes" },
						{ "data": "szekhely", "name": "szekhely" },
						{ "data": "telephely1", "name": "telephely1" },
						{ "data": "telephely2", "name": "telephely2" },
						{ "data": "arlista_minositesek_megnevezes", "name": "arlista_minositesek_megnevezes" },
                                                { "data": "fizetesi_modok_megnevezes", "name": "fizetesi_modok_megnevezes" },
                                                { "data": "deviza", "name": "deviza" },
                                                {defaultContent : "<input type='button' class='form-control sm' value='Szerkesztés'>"}
				],
				'language': {
					'lengthMenu': '_MENU_',
					'zeroRecords': 'Nincs találat',
					'info': '1 _PAGE_ / _PAGES_ (összesen _TOTAL_ találat)',
					'infoEmpty':  'Nincs találat',
					'infoFiltered': '',
					'sProcessing': 'Kérem várjon',
					'searchPlaceholder': 'Keresés',
					'oPaginate': {
						'sFirst': 'Első',
						'sPrevious': 'Elöző',
						'sNext': 'Következő',
						'sLast': 'utolsó'
								}
				},
				'iDisplayStart': 0,
				'iDisplayLength': 100,
				'iDeferLoading': [[10, 25, 50, 100], [10, 25, 50, 100]],
				'aLengthMenu': [[10, 25, 50, 100], [10, 25, 50, 100]],
				'sDom': 'l<"toolbar">frtip',
				'processing': true,
				'serverSide': false,
				'searchable': true,
				'ajax': {
					'url': 'ajax/partnerek.php',
					'type': 'POST',
					'dataSrc':'data'
				},
				'fnDrawCallback': function (oSettings) {
					AddEsemeny();
					AddTorles();
					AddKontact();
				},
				'fnRowCallback': function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                
					return nRow;
				}
			});

			$("div.toolbar").html(custom_toolbar_inputs);
			$("div.toolbar").css({
				'float': 'left',
				'margin-left': '4px'
			});
			//TablazatFrissites();
		});
                
                
		function TablazatFrissites() {

			var tabla = $('#Table').dataTable().api();
			tabla.ajax.reload(null, true);

			tabla.one("draw", function () { DataTablesColumnAdjust("#Table"); });
		}
function AddEsemeny(){

    $("#Table tbody tr td input[type='button']").on("click", function () {
        
      var row = $(this).closest('tr');
      var id = row.attr('id')
        Szerkesztes(id);
        Torles(id);
        Kontakt(id);
    });
}   

function Szerkesztes( id ){
    //Hazi felaladat google jquery3 es redirect mukodese
   // $.redirect("partnerszerkesztes.php", { "id": id });
    window.location='partnerszerkesztes.php?id='+id;
}

function Torles( id ){
            //Hazi felaladat google jquery3 es redirect mukodese
            // $.redirect("partnerszerkesztes.php", { "id": id });
            window.location='partnertorles.php?id='+id;
}

function Kontact( id ){
            //Hazi felaladat google jquery3 es redirect mukodese
            // $.redirect("partnerszerkesztes.php", { "id": id });
            window.location='partnerkontakt.php?id='+id;
}
                
</script>
<?php
Lablec();
?>
