<?php echo form_open('status_instansi/edit/'.$status_instansi['ID_STATUS_INSTANSI'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="TEKS_STATUS_INSTANSI" class="col-md-4 control-label">TEKS STATUS INSTANSI</label>
		<div class="col-md-8">
			<input type="text" name="TEKS_STATUS_INSTANSI" value="<?php echo ($this->input->post('TEKS_STATUS_INSTANSI') ? $this->input->post('TEKS_STATUS_INSTANSI') : $status_instansi['TEKS_STATUS_INSTANSI']); ?>" class="form-control" id="TEKS_STATUS_INSTANSI" />
		</div>
	</div>
	<div class="form-group">
		<label for="KETERANGAN_STATUS_INSTANSI" class="col-md-4 control-label">KETERANGAN STATUS INSTANSI</label>
		<div class="col-md-8">
			<input type="text" name="KETERANGAN_STATUS_INSTANSI" value="<?php echo ($this->input->post('KETERANGAN_STATUS_INSTANSI') ? $this->input->post('KETERANGAN_STATUS_INSTANSI') : $status_instansi['KETERANGAN_STATUS_INSTANSI']); ?>" class="form-control" id="KETERANGAN_STATUS_INSTANSI" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>