<?php echo form_open('pelajaran/edit/'.$pelajaran['ID_PELAJARAN'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_RUANG" class="col-md-4 control-label">Ruang</label>
		<div class="col-md-8">
			<select name="ID_RUANG" class="form-control">
				<option value="">select ruang</option>
				<?php 
				foreach($all_ruangs as $ruang)
				{
					$selected = ($ruang['ID_RUANG'] == $pelajaran['ID_RUANG']) ? ' selected="selected"' : "";

					echo '<option value="'.$ruang['ID_RUANG'].'" '.$selected.'>'.$ruang['NAMA_RUANG'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="NAMA_PELAJARAN" class="col-md-4 control-label">NAMA PELAJARAN</label>
		<div class="col-md-8">
			<textarea name="NAMA_PELAJARAN" class="form-control" id="NAMA_PELAJARAN"><?php echo ($this->input->post('NAMA_PELAJARAN') ? $this->input->post('NAMA_PELAJARAN') : $pelajaran['NAMA_PELAJARAN']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="KETERANGAN_PELAJARAN" class="col-md-4 control-label">KETERANGAN PELAJARAN</label>
		<div class="col-md-8">
			<textarea name="KETERANGAN_PELAJARAN" class="form-control" id="KETERANGAN_PELAJARAN"><?php echo ($this->input->post('KETERANGAN_PELAJARAN') ? $this->input->post('KETERANGAN_PELAJARAN') : $pelajaran['KETERANGAN_PELAJARAN']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>