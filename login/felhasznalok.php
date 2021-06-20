<?php include_once 'head.php';
Head();
?>
    <body style="background-color: #f1eae0">
<?php
Menu();
?>
    <br>
    <hr>
    <div class="col-sm-4 offset-4">
        <?php if (isset($_GET['name'])){  ?>
            <div class="modal fade" id="overlay">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background: linear-gradient(40deg, #2096bb, #0056aa); color: white; text-align: center">
                            <h4 class="modal-title">Felhasználó</h4>
                        </div>
                        <div class="modal-body">
                            <h5 style="text-align: center">Felhasználó rögzítése sikeresen megtörtént. </h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="table-title " style="width: initial">
        <div class="row">
            <div class="col-sm-6" style="margin-top: 5px">
                <h5><b style="padding-top: 20px"><span> Felhasználók </span></b></h5>
            </div>
            <div class="col-sm-6">
                <button name="ujfelvitel" VALUE="új felvitel" type="submit"  class="btn btn-success" data-toggle="modal"  value="Új felvitele" id="btn" onClick="Szerkesztes(0);"><i class="material-icons">&#xE147;</i>
                    <span> új felvitel </span></button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <table id="example" class="display cell-border" style="width: 100%">
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>Név</th>
                        <th>Email</th>
                        <th></th>
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

                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script>
        var custom_toolbar_inputs = "";
        custom_toolbar_inputs += "";
        $(document).ready(function() {
            $('#overlay').modal('show');
            setTimeout(function() {
                $('#overlay').modal('hide');
            }, 3000);
            $('#example').DataTable( {
                'scrollX': true,
                'scrollY': setDataTableHeight(),
                'scrollCollapse': true,
                'ordering': false,
                'bAutoWidth': true,
                'bSort': false,
                'columns': [
                    { "data": "user_id", "name": "user_id" },
                    { "data": "user_name", "name": "user_name" },
                    { "data": "user_email", "name": "user_email" },
                    {defaultContent : "<button type='button' class='btn'  data-azonositas='1'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>"},
                    {defaultContent : "<button type='button' class='btn'  data-azonositas='2'><i class='fa fa-trash-o' aria-hidden='true'></i></button>"}
                ],
                'language': {
                    'lengthMenu': '_MENU_',
                    'zeroRecords': 'Nincs találat',
                    'info': '1 _PAGE_ / _PAGES_ (összesen _TOTAL_ találat)',
                    'infoEmpty':  'Nincs találat',
                    'infoFiltered': '',
                    'sProcessing': 'Kérem várjon',
                    'searchPlaceholder': 'Keresés',
                    'Search': 'Keresés',
                    "search": "",
                    'oPaginate': {
                        'sFirst': 'Első',
                        'sPrevious': 'Elöző',
                        'sNext': 'Következő',
                        'sLast': 'utolsó'
                    }
                },
                'iDisplayStart': 100,
                'iDisplayLength': 100,
                //'iDeferLoading': [],
                "bPaginate": true,
                "bLengthChange": false,
                'sDom': 'l<"toolbar">frtip',
                'processing': false,
                'serverSide': false,
                'searchable': true,
                "lengthChange": false,
                "bInfo": false,
                'ajax': {
                    'url': 'ajax/felhasznalok.php',
                    'type': 'POST',
                    'dataSrc':'data'
                },
                'fnDrawCallback': function (oSettings) {
                    AddEsemeny();
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

            $("#example tbody tr td button[type='button']").on("click", function () {
                var azonositas = $(this).data('azonositas');

                var row = $(this).closest('tr');
                var id = row.attr('id')
                switch ( azonositas*1 ){
                    case 1 : Szerkesztes(id);
                        break;
                    case 2 : Torles(id);
                        break;
                }

            });
        }


        function Szerkesztes( id ){
            // $.redirect("felhasznalok_javitas.php", { "id": id });
            window.location='felhasznalok_javitas.php?id='+id;
        }


        function Torles(id) {

            BootstrapDialog.show({
                type:BootstrapDialog.TYPE_DANGER,
                title : 'Felhasználó törlése',
                message: 'Biztosan törölni szeretnéd ?',
                data: {
                    'user_id': id
                },
                buttons: [{
                    label: 'Mégsem',
                    action: function(dialogRef){
                        dialogRef.close();
                    }
                },
                    {
                        label: 'Törlés',
                        cssClass: 'btn-primary',
                        action: function(dialogRef){
                            window.location = 'felhasznalok_torles.php?id='+dialogRef.getData('user_id')+'';
                        }
                    }]
            });
        }
    </script>
<?php Footer_js(); ?>
<!--<script>
        var custom_toolbar_inputs = "";
        custom_toolbar_inputs += "";
        $(document).ready(function() {
            $('#overlay').modal('show');
            setTimeout(function() {
                $('#overlay').modal('hide');
            }, 3000);
            $('#example').DataTable( {
                'scrollX': true,
                'scrollY': setDataTableHeight(),
                'scrollCollapse': true,
                'ordering': false,
                'bAutoWidth': true,
                'bSort': false,
                'columns': [
                    { "data": "user_name", "name": "user_name" },
                    { "data": "user_email", "name": "user_email" },
                    {defaultContent : "<button type='button' class='btn'  data-azonositas='1'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>"},
                    {defaultContent : "<button type='button' class='btn'  data-azonositas='2'><i class='fa fa-trash-o' aria-hidden='true'></i></button>"}
                ],
                'language': {
                    'lengthMenu': '_MENU_',
                    'zeroRecords': 'Nincs találat',
                    'info': '1 _PAGE_ / _PAGES_ (összesen _TOTAL_ találat)',
                    'infoEmpty':  'Nincs találat',
                    'infoFiltered': '',
                    'sProcessing': 'Kérem várjon',
                    'searchPlaceholder': 'Keresés',
                    'Search': 'Keresés',
                    "search": "",
                    'oPaginate': {
                        'sFirst': 'Első',
                        'sPrevious': 'Elöző',
                        'sNext': 'Következő',
                        'sLast': 'utolsó'
                    }
                },
                'iDisplayStart': 100,
                'iDisplayLength': 100,
                //'iDeferLoading': [],
                "bPaginate": true,
                "bLengthChange": false,
                'sDom': 'l<"toolbar">frtip',
                'processing': false,
                'serverSide': false,
                'searchable': true,
                "lengthChange": false,
                "bInfo": false,
                'ajax': {
                    'url': 'ajax/felhasznalok.php',
                    'type': 'POST',
                    'dataSrc':'data'
                },
                'fnDrawCallback': function (oSettings) {
                    AddEsemeny();
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
             $('#example tbody tr td button[type="button"]').on('click', function () {
               //  $('#example tbody').on( 'click', function () {
                     var azonositas = $(this).data('azonositas');
                     var row = $(this).closest('tr');
                     var id = row.attr('id')
                     switch ( azonositas*1 ){
                         case 1 : Szerkesztes(id);
                             break;
                         case 2 : Torles(id);
                             break;
                     }

                 });
         }
        function Szerkesztes(id){
         window.location='felhasznalok_javitas.php?id='+id;
        }
        function Torles(id) {
				BootstrapDialog.show({
					type:BootstrapDialog.TYPE_DANGER,
					title : 'Felhasználó törlése'+id,
					message: 'Biztosan törölni szeretnéd ?',
					data: {
						'user_id': id
					},
					buttons: [{
						label: 'Mégsem',
						action: function(dialogRef){
							dialogRef.close();
						}
					},
					{
						label: 'Törlés',
						cssClass: 'btn-primary',
						action: function(dialogRef){				
							window.location = 'felhasznalok_torles.php?id='+dialogRef.getData('id')+'';
						}
					}]
				});
        }
    </script> -->
<?php Footer_js(); ?>