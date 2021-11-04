<?php echo form_open('instansi_pendidikan/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_STATUS_INSTANSI" class="col-md-4 control-label">Status Instansi</label>
		<div class="col-md-8">
			<select name="ID_STATUS_INSTANSI" class="form-control">
				<option value="">select status_instansi</option>
				<?php 
				foreach($all_status_instansis as $status_instansi)
				{
					$selected = ($status_instansi['ID_STATUS_INSTANSI'] == $this->input->post('ID_STATUS_INSTANSI')) ? ' selected="selected"' : "";

					echo '<option value="'.$status_instansi['ID_STATUS_INSTANSI'].'" '.$selected.'>'.$status_instansi['TEKS_STATUS_INSTANSI'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="NAMA_INSTANSI_PENDIDIKAN" class="col-md-4 control-label"><span class="text-danger">*</span>NAMA INSTANSI PENDIDIKAN</label>
		<div class="col-md-8">
			<input type="text" name="NAMA_INSTANSI_PENDIDIKAN" value="<?php echo $this->input->post('NAMA_INSTANSI_PENDIDIKAN'); ?>" class="form-control" id="NAMA_INSTANSI_PENDIDIKAN" />
			<span class="text-danger"><?php echo form_error('NAMA_INSTANSI_PENDIDIKAN');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="ALAMAT_INSTANSI_PENDIDIKAN" class="col-md-4 control-label">ALAMAT INSTANSI PENDIDIKAN</label>
		<div class="col-md-8">
			<input type="text" name="ALAMAT_INSTANSI_PENDIDIKAN" value="<?php echo $this->input->post('ALAMAT_INSTANSI_PENDIDIKAN'); ?>" class="form-control" id="ALAMAT_INSTANSI_PENDIDIKAN" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>