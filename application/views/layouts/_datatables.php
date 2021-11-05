  $(function () {
    $("#dataTableView").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "lengthMenu": [5, 10, 20, 50, 100, 200, 500],
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#dataTableView_wrapper .col-md-6:eq(0)');
    $('#dataTableView2').DataTable({
      "paging": true,
      "lengthMenu": [5, 10, 20, 50, 100, 200, 500],
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });