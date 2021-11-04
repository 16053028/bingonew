<?php echo form_open('ruang/edit/'.$ruang['ID_RUANG'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_INSTANSI_PENDIDIKAN" class="col-md-4 control-label">Instansi Pendidikan</label>
		<div class="col-md-8">
			<select name="ID_INSTANSI_PENDIDIKAN" class="form-control">
				<option value="">select instansi_pendidikan</option>
				<?php 
				foreach($all_instansi_pendidikans as $instansi_pendidikan)
				{
					$selected = ($instansi_pendidikan['ID_INSTANSI_PENDIDIKAN'] == $ruang['ID_INSTANSI_PENDIDIKAN']) ? ' selected="selected"' : "";

					echo '<option value="'.$instansi_pendidikan['ID_INSTANSI_PENDIDIKAN'].'" '.$selected.'>'.$instansi_pendidikan['NAMA_INSTANSI_PENDIDIKAN'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="NAMA_RUANG" class="col-md-4 control-label">NAMA RUANG</label>
		<div class="col-md-8">
			<textarea name="NAMA_RUANG" class="form-control" id="NAMA_RUANG"><?php echo ($this->input->post('NAMA_RUANG') ? $this->input->post('NAMA_RUANG') : $ruang['NAMA_RUANG']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="KETERANGAN_RUANG" class="col-md-4 control-label">KETERANGAN RUANG</label>
		<div class="col-md-8">
			<textarea name="KETERANGAN_RUANG" class="form-control" id="KETERANGAN_RUANG"><?php echo ($this->input->post('KETERANGAN_RUANG') ? $this->input->post('KETERANGAN_RUANG') : $ruang['KETERANGAN_RUANG']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>