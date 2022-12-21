$(document).ready(function() {
    var table = $('#table-users').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );