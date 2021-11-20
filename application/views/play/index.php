<div class="d-flex flex-column bd-highlight mb-3 align-content-around py-5">
  <div class="p-2 bd-highlight align-self-center"></div>
  <div class="p-2 bd-highlight">
  	<section class="vh-100">
	  <div class="container py-5 h-100">
	    <div class="row d-flex justify-content-center align-items-center h-100">
	      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
	        <div class="card border-dark shadow-2-strong" style="border-radius: 1rem;">
	          <div class="card-body p-5 text-center">
	          	<?php echo form_open('play/createSessionData'); ?>
	            <img src="<?php echo base_url('resources/img/logo.png'); ?>">
	            <h1>E-Bingo App</h1>

	            <div class="form-group">
						    <label for="NAMA_PEMAIN">Nama Lengkap</label>
						    <input type="text" class="form-control" id="NAMA_PEMAIN" name="NAMA_PEMAIN" aria-describedby="namaPemainHelp" placeholder="Nama Lengkap">
						    <small id="namaPemainHelp" class="form-text text-muted">Nama Lengkap anda akan muncul pada list pemain</small>
						  </div>
	            
	            <hr class="my-4">
	            <button type="submit" class="btn btn-primary btn-block">Play</button>
	            <!-- <a href="<?php echo base_url() ?>" class="btn btn-primary btn-block">Play</a> -->
							<?php echo form_close(); ?>	          	

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

