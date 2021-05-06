var SorStri = [];
var disSorStri = 8;
SorStri.push({ "bSortable": false, "aTargets": [disSorStri] });

$(function() {
        var table = $('#StudentsTable').dataTable({
            "paging": true,
            "ordering": true,
            "info": true,
            "aaSorting": [],
            "orderMulti": true,
            "aoColumnDefs": SorStri

        });
});