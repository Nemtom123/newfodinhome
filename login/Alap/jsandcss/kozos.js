var setDataTableHeight = function () {
        var div1 = $(".container-fluid").height();
        var div2 = $(".ui-tabs-panel").height();
        var div3 = 100 + div1 + div2;
        var div4 = $(window).height();
        //alert( div4-( div1+div2+div3)+"="+div4+"-("+div1+"+"+div2+"+"+div3+")" );
        return div4 - (div1 + div2 + div3);
    }



function DataTablesColumnAdjust(id) {
    var oTable = $(id).dataTable();
    $(oTable).css({ width: $(oTable).parent().width() - 18 });
    $(oTable).css("margin-left", "0px");
    oTable.fnAdjustColumnSizing();
}