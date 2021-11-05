<!-- jQuery -->
<script src="<?php echo site_url('resources/');?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo site_url('resources/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo site_url('resources/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo site_url('resources/');?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo site_url('resources/');?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo site_url('resources/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo site_url('resources/');?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo site_url('resources/');?>plugins/moment/moment.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo site_url('resources/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo site_url('resources/');?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo site_url('resources/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo site_url('resources/');?>js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo site_url('resources/');?>js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo site_url('resources/');?>js/pages/dashboard.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo site_url('resources/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo site_url('resources/');?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  <?php                    
    if(isset($_spesific_script) && $_spesific_script)
        $this->load->view($_spesific_script);
    else
  ?>
</script>

<?php if (isset($_spesific_script_2) && ($_spesific_script_2)): ?>
  <?php foreach ($_spesific_script_2 as $js_load): ?>
    <script src="<?php echo base_url($js_load);?>"></script>
  <?php endforeach ?>
<?php endif ?>