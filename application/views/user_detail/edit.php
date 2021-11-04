<?php echo form_open('user_detail/edit/'.$user_detail['ID_USER_DETAILS'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="NAMA_USER" class="col-md-4 control-label">NAMA USER</label>
		<div class="col-md-8">
			<input type="text" name="NAMA_USER" value="<?php echo ($this->input->post('NAMA_USER') ? $this->input->post('NAMA_USER') : $user_detail['NAMA_USER']); ?>" class="form-control" id="NAMA_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="ALAMAT_USER" class="col-md-4 control-label">ALAMAT USER</label>
		<div class="col-md-8">
			<input type="text" name="ALAMAT_USER" value="<?php echo ($this->input->post('ALAMAT_USER') ? $this->input->post('ALAMAT_USER') : $user_detail['ALAMAT_USER']); ?>" class="form-control" id="ALAMAT_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="JK_USER" class="col-md-4 control-label">JK USER</label>
		<div class="col-md-8">
			<input type="text" name="JK_USER" value="<?php echo ($this->input->post('JK_USER') ? $this->input->post('JK_USER') : $user_detail['JK_USER']); ?>" class="form-control" id="JK_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="TELP_USER" class="col-md-4 control-label">TELP USER</label>
		<div class="col-md-8">
			<input type="text" name="TELP_USER" value="<?php echo ($this->input->post('TELP_USER') ? $this->input->post('TELP_USER') : $user_detail['TELP_USER']); ?>" class="form-control" id="TELP_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="EMAIL_USER" class="col-md-4 control-label">EMAIL USER</label>
		<div class="col-md-8">
			<input type="text" name="EMAIL_USER" value="<?php echo ($this->input->post('EMAIL_USER') ? $this->input->post('EMAIL_USER') : $user_detail['EMAIL_USER']); ?>" class="form-control" id="EMAIL_USER" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>