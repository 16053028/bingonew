<?php echo form_open('user/add') ?>

<div class="row">
  <div class="col-md-6">
  	<div class="card card-primary">
          	<div class="card-header">
              	<h3 class="card-title">Formulir biodata</h3>
          	</div>
            <!-- /.card-header -->
            <!-- form start -->
              <div class="card-body">
                	<div class="form-group">
                    <label for="inputNamaUser">Nama User</label>
                    <input type="text" class="form-control <?= form_error('inputNamaUser') ? "is-invalid" : "" ?>" id="inputNamaUser" name="inputNamaUser" placeholder="Masukkan nama user">
                    <?php echo form_error('inputNamaUser'); ?> 
	              	</div>

	              	<div class="form-group">
	                	<label for="inputAlamatUser">Alamat User</label><br />
										<textarea class="form-control <?= form_error('inputNamaUser') ? "is-invalid" : "" ?>" style="width: 100%;" id="inputAlamatUser" name="inputAlamatUser"></textarea>
										<?php echo form_error('inputAlamatUser'); ?> 
	              	</div>

	              	<div class="form-group">
	                	<label for="inputJenisKelamin">Jenis Kelamin</label><br />
										<select class="form-control" name="inputJenisKelamin" id="inputJenisKelamin">
											<option hidden>Pilih jenis kelamin</option>
											<option value="1">Laki-Laki</option>
											<option value="2">Perempuan</option>
										</select>
	             		</div>

	             	<div class="form-group">
                	<label for="inputEmailUser">Email User</label>
                	<input type="email" class="form-control" id="inputEmailUser" name="inputEmailUser" placeholder="Enter email">
              	</div>

              	<div class="form-group">
                	<label for="inputTelpUser">Telp User</label>
                	<input type="text" class="form-control" id="inputTelpUser" name="inputTelpUser" placeholder="Enter email">
              	</div>

              	<div class="form-group">
                	<label for="inputStatusUser">Status User</label><br />
									<select class="form-control" name="inputStatusUser" id="inputStatusUser">
										<option hidden>Pilih Status User</option>
										<?php if (isset($_status_users) && $_status_users): ?>
											<?php foreach ($_status_users as $_status_user): ?>
												<option value="<?php echo $_status_user['ID_STATUS_USER'] ?>">
													<?php echo $_status_user['TEKS_STATUS_USER'] ?>
												</option>
											<?php endforeach ?>
										<?php endif ?>
									</select>
             		</div>

	             	<div class="form-group">
	                <label for="inputInstansiPendidikan">Instansi Pendidikan</label><br />
									<select class="form-control" name="inputInstansiPendidikan" id="inputInstansiPendidikan">
										<option hidden>Pilih Instansi Pendidikan</option>
										<?php if (isset($_daftar_instansi) && $_daftar_instansi): ?>
											<?php foreach ($_daftar_instansi as $_instansi_pendidikan): ?>
												<option value="<?php echo $_instansi_pendidikan['ID_INSTANSI_PENDIDIKAN'] ?>">
													<?php echo $_instansi_pendidikan['NAMA_INSTANSI_PENDIDIKAN'] ?>
												</option>
											<?php endforeach ?>
										<?php endif ?>
									</select>
	             	</div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
              	
          	  </div>
        </div>
  </div>

  <div class="col-md-6">
  	<div class="card card-primary">
  		<div class="card-header">
  			<div class="card-title">
  				<h3>Login User</h3>
  			</div>
  		</div>
  		<div class="card-body">
  			<div class="form-group">
              <label for="inputUsername">Username</label>
              <input type="text" class="form-control <?= form_error('inputUsername') ? "is-invalid" : "" ?>" id="inputUsername" name="inputUsername" placeholder="Masukkan Username">
              <?php echo form_error('inputUsername'); ?> 
        </div>

        <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control <?= form_error('inputPassword') ? "is-invalid" : "" ?>" id="inputPassword" name="inputPassword" placeholder="Masukkan Password">
              <?php echo form_error('inputPassword'); ?> 
        </div>

        <div class="form-group">
              <label for="inputConfirmPassword">Confirm Password</label>
              <input type="password" class="form-control <?= form_error('inputConfirmPassword') ? "is-invalid" : "" ?>" id="inputConfirmPassword" name="inputConfirmPassword" placeholder="Ulangi Password">
              <?php echo form_error('inputConfirmPassword'); ?> 
        </div>
  		</div>
  	</div>
  </div>
</div>

<div class="row">
	<div class="col-sm-4">
      <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
	</div>

	<div class="col-sm-4">
      <button class="btn btn-warning btn-lg btn-block" type="reset">Reset</button>
	</div>

	<div class="col-sm-4">
      <button class="btn btn-danger btn-lg btn-block" type="cancel">Batal</button>
	</div>
</div>

<?php echo form_close(); ?>