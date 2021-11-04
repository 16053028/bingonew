<?php echo form_open('status_user/edit/'.$status_user['ID_STATUS_USER'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="TEKS_STATUS_USER" class="col-md-4 control-label">TEKS STATUS USER</label>
		<div class="col-md-8">
			<input type="text" name="TEKS_STATUS_USER" value="<?php echo ($this->input->post('TEKS_STATUS_USER') ? $this->input->post('TEKS_STATUS_USER') : $status_user['TEKS_STATUS_USER']); ?>" class="form-control" id="TEKS_STATUS_USER" />
		</div>
	</div>
	<div class="form-group">
		<label for="KETRANGAN__STATUS_USER" class="col-md-4 control-label">KETRANGAN  STATUS USER</label>
		<div class="col-md-8">
			<input type="text" name="KETRANGAN__STATUS_USER" value="<?php echo ($this->input->post('KETRANGAN__STATUS_USER') ? $this->input->post('KETRANGAN__STATUS_USER') : $status_user['KETRANGAN__STATUS_USER']); ?>" class="form-control" id="KETRANGAN__STATUS_USER" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>