
$(document).ready(function() {
    $('#usuarios-table').DataTable({
        "scrollX": true,
        searching: false,
        "lengthMenu": [[5], [5]],
        "targets": 'no-sort',
        "bSort": false,
        "order": [],
        "language":{
            "search":" ",
            "lengthMenu":" ",

            "info":" ",
            "paginate":{
                            "previous":"Anterior",
                            "next":"Siguiente",
                            "first":"Primero",
                            "last":"Ultimo"
            }
        }
    });
} );
$(document).ready(function() {
    $('#motivos-table').DataTable({
        "scrollX": true,
        searching: false,
        "lengthMenu": [[5], [5]],
        "targets": 'no-sort',
        "bSort": false,
        "order": [],
        "language":{
            "search":" ",
            "lengthMenu":" ",

            "info":" ",
            "paginate":{
                            "previous":"Anterior",
                            "next":"Siguiente",
                            "first":"Primero",
                            "last":"Ultimo"
            }
        }
    });
} );
$(document).ready(function() {
    $('#resoluciones-table').DataTable({
        "scrollX": true,
        "searching": false,
        "lengthMenu": [[5], [5]],
        "targets": 'no-sort',
        "bSort": false,
        "order": [],
        "language":{
            "search":" ",
            "lengthMenu":" ",

            "info":" ",
            "paginate":{
                            "previous":"Anterior",
                            "next":"Siguiente",
                            "first":"Primero",
                            "last":"Ultimo"
            }
        }
    });
} );
