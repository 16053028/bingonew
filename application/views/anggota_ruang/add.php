 <?php echo form_open('anggota_ruang/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_USER" class="col-md-4 control-label">User</label>
		<div class="col-md-8">
			<select name="ID_USER" class="form-control">
				<option value="">select user</option>
				<?php 
				foreach($all_users as $user)
				{
					$selected = ($user['ID_USER'] == $this->input->post('ID_USER')) ? ' selected="selected"' : "";

					echo '<option value="'.$user['ID_USER'].'" '.$selected.'>'.$user['ID_USER'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ID_RUANG" class="col-md-4 control-label">Ruang</label>
		<div class="col-md-8">
			<select name="ID_RUANG" class="form-control">
				<option value="">select ruang</option>
				<?php 
				foreach($all_ruangs as $ruang)
				{
					$selected = ($ruang['ID_RUANG'] == $this->input->post('ID_RUANG')) ? ' selected="selected"' : "";

					echo '<option value="'.$ruang['ID_RUANG'].'" '.$selected.'>'.$ruang['NAMA_RUANG'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDENTIFIER_ANGGOTA" class="col-md-4 control-label"><span class="text-danger">*</span>IDENTIFIER ANGGOTA</label>
		<div class="col-md-8">
			<textarea name="IDENTIFIER_ANGGOTA" class="form-control" id="IDENTIFIER_ANGGOTA"><?php echo $this->input->post('IDENTIFIER_ANGGOTA'); ?></textarea>
			<span class="text-danger"><?php echo form_error('IDENTIFIER_ANGGOTA');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>