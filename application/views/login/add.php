<?php echo form_open('login/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="USERNAME_LOGIN" class="col-md-4 control-label">USERNAME LOGIN</label>
		<div class="col-md-8">
			<input type="text" name="USERNAME_LOGIN" value="<?php echo $this->input->post('USERNAME_LOGIN'); ?>" class="form-control" id="USERNAME_LOGIN" />
		</div>
	</div>
	<div class="form-group">
		<label for="PASSWORD_LOGIN" class="col-md-4 control-label">PASSWORD LOGIN</label>
		<div class="col-md-8">
			<input type="text" name="PASSWORD_LOGIN" value="<?php echo $this->input->post('PASSWORD_LOGIN'); ?>" class="form-control" id="PASSWORD_LOGIN" />
		</div>
	</div>
	<div class="form-group">
		<label for="LAST_LOGIN" class="col-md-4 control-label">LAST LOGIN</label>
		<div class="col-md-8">
			<input type="text" name="LAST_LOGIN" value="<?php echo $this->input->post('LAST_LOGIN'); ?>" class="form-control" id="LAST_LOGIN" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>