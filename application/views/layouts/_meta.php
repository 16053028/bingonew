<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
	<?php                    
        if(isset($_title_page) && $_title_page)
            echo $_title_page;
        else{
        	echo "{No Title}";
        }
    ?>

</title>

<link rel="icon" href="<?php echo site_url('resources/');?>img/logo.png">

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/summernote/summernote-bs4.min.css">

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo site_url('resources/');?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<!-- Spesific CSS -->
<?php if (isset($_spesific_css) && ($_spesific_css)): ?>
  <?php foreach ($_spesific_css as $css_load): ?>
    <script src="<?php echo base_url($css_load['select2']);?>"></script>
  <?php endforeach ?>
<?php endif ?>