	
<?php echo form_open('user/edit/'.$tbl_user['ID_USER']) ?>

<div class="row">
 	<?php foreach ($data_user as $data): ?>
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
                    <input type="text" class="form-control <?= form_error('inputNamaUser') ? "is-invalid" : "" ?>" id="inputNamaUser" name="inputNamaUser" placeholder="Masukkan nama user" value="<?php	echo ($this->input->post('inputNamaUser') ? $this->input->post('inputNamaUser') : $data['NAMA_USER']);?>">

                    <?php echo form_error('inputNamaUser'); ?> 
	              	</div>

	              	<div class="form-group">
	                	<label for="inputAlamatUser">Alamat User</label><br />
										<textarea class="form-control <?= form_error('inputAlamatUser') ? "is-invalid" : "" ?>" style="width: 100%;" id="inputAlamatUser" name="inputAlamatUser"><?php	echo ($this->input->post('inputAlamatUser') ? $this->input->post('inputAlamatUser') : $data['ALAMAT_USER']);?></textarea>
										<?php echo form_error('inputAlamatUser'); ?> 
	              	</div>

	              	<div class="form-group">
	                	<label for="inputJenisKelamin">Jenis Kelamin</label><br />
										<select name="inputJenisKelamin" class="form-control">
											<option value="">select</option>
											<?php 
											$JK_USER_values = array(
												'1'=>'LAKI-LAKI',
												'2'=>'PEREMPUAN',
											);

											foreach($JK_USER_values as $value => $display_text)
											{
												$selected = ($value == $data['JK_USER']) ? ' selected="selected"' : "";

												echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
											} 
											?>
										</select>
	             		</div>

	             	<div class="form-group">
                	<label for="inputEmailUser">Email User</label>
                	<input type="email" class="form-control" id="inputEmailUser" name="inputEmailUser" placeholder="Enter email" value="<?php	echo ($this->input->post('inputEmailUser') ? $this->input->post('inputEmailUser') : $data['EMAIL_USER']);?>">
              	</div>

              	<div class="form-group">
                	<label for="inputTelpUser">Telp User</label>
                	<input type="text" class="form-control" id="inputTelpUser" name="inputTelpUser" placeholder="Enter email" value="<?php	echo ($this->input->post('inputTelpUser') ? $this->input->post('inputTelpUser') : $data['TELP_USER']);?>">
              	</div>

              	<div class="form-group">
                	<label for="inputStatusUser">Status User</label><br />
									<select name="inputStatusUser" class="form-control">
										<?php 
										foreach($all_tbl_status_user as $tbl_status_user)
										{
											$selected = ($tbl_status_user['ID_STATUS_USER'] == $tbl_user['ID_STATUS_USER']) ? ' selected="selected"' : "";

											echo '<option value="'.$tbl_status_user['ID_STATUS_USER'].'" '.$selected.'>'.$tbl_status_user['TEKS_STATUS_USER'].'</option>';
										} 
										?>
									</select>
             		</div>

	             	<div class="form-group">
	                <label for="inputInstansiPendidikan">Instansi Pendidikan</label><br />
									<select name="inputInstansiPendidikan" class="form-control">
										<?php 
										foreach($all_tbl_instansi_pendidikan as $tbl_instansi_pendidikan)
										{
											$selected = ($tbl_instansi_pendidikan['ID_INSTANSI_PENDIDIKAN'] == $tbl_user['ID_INSTANSI_PENDIDIKAN']) ? ' selected="selected"' : "";

											echo '<option value="'.$tbl_instansi_pendidikan['ID_INSTANSI_PENDIDIKAN'].'" '.$selected.'>'.$tbl_instansi_pendidikan['NAMA_INSTANSI_PENDIDIKAN'].'</option>';
										} 
										?>
									</select>
	             	</div>

              </div>
              <!-- /.card-body -->
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
              <input type="text" class="form-control <?= form_error('inputUsername') ? "is-invalid" : "" ?>" id="inputUsername" name="inputUsername" placeholder="Masukkan Username" value="<?php	echo ($this->input->post('inputTelpUser') ? $this->input->post('inputTelpUser') : $data['USERNAME_LOGIN']);?>">
              <?php echo form_error('inputUsername'); ?> 
        </div>

        <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control <?= form_error('inputPassword') ? "is-invalid" : "" ?>" id="inputPassword" name="inputPassword" placeholder="Masukkan Password Baru">
              <?php echo form_error('inputPassword'); ?> 
        </div>

        <div class="form-group">
              <label for="inputConfirmPassword">Confirm Password</label>
              <input type="password" class="form-control <?= form_error('inputConfirmPassword') ? "is-invalid" : "" ?>" id="inputConfirmPassword" name="inputConfirmPassword" placeholder="Ulangi Password Baru">
              <?php echo form_error('inputConfirmPassword'); ?> 
        </div>
  		</div>
  		<div class="card-footer">
  			<p class="text-warning">Harap masukkan password baru setiap kali melakukan perubahan data.</p>
  		</div>
  	</div>
  </div>

  <?php endforeach ?>
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