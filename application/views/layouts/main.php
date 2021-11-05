<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('layouts/_meta'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php $this->load->view('layouts/_preloader'); ?>

  <!-- Navbar -->
  <?php $this->load->view('layouts/navbar'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <?php $this->load->view('layouts/sidebar'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <?php                    
                  if(isset($_title_page) && $_title_page)
                      echo $_title_page;
                  else{
                    echo "{No Title}";
                  }
              ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <?php $this->load->view('layouts/_breadcrumb'); ?>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->

        <!-- Main row -->

        <?php                    
            if(isset($_view) && $_view)
                $this->load->view($_view);
        ?>    
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php $this->load->view('layouts/footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php $this->load->view('layouts/_script'); ?>
</body>
</html> 

