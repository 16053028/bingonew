<div class="d-flex flex-column bd-highlight mb-3 align-content-around py-5">
  <div class="p-2 bd-highlight align-self-center"></div>
  <div class="p-2 bd-highlight">
  	<section class="vh-100">
	  <div class="container py-5 h-100">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
	        <div class="card border-dark shadow-2-strong" style="border-radius: 1rem;">
	          <div class="card-body p-5 text-center">
	          	<h1>Pilih Pelajaran</h1>

	          	<hr class="my-4">
	          	<?php foreach ($all_ruangs as $ruang): ?>
	          		<a href="<?php echo base_url('play/pilih_materi/'.$ruang['ID_RUANG'].'/') ?>" class="btn btn-primary btn-block"><?php echo $ruang['NAMA_RUANG']; ?></a>
	          	<?php endforeach ?>

	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
  </div>
  <div class="p-2 bd-highlight align-self-center flex-fill">

  </div>
</div>

