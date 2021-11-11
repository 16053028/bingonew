<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Bingo Web Aplication</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/bootstrap-413/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/plugins/fontawesome-free/css/fontawesome.css'); ?>">
</head>
<body style="background-image: url(<?php echo base_url('resources/img/bg-play.png'); ?>); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

	<div class="wrapper">
		<!-- Body Content -->
		<div class="content-wrapper">
			<!-- Main Content -->
			<section class="content">
				<div class="container-fluid">
					<?php                    
			            if(isset($_view) && $_view)
			                $this->load->view($_view);
			        ?>
				</div>
			</section>
			<!-- End Main Content -->
		</div>
		<!-- End Body Content -->

		<footer>
			
		</footer>
	</div>
	
	<script src="<?php echo base_url('resources/bootstrap-413/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('resources/plugins/jquery/jquery.min.js'); ?>"></script>
	<script  src="<?php echo base_url('resources/bingo-card/') ?>script.js"></script>
</body>
</html>