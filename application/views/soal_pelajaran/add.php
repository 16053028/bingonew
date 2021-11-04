<?php echo form_open('soal_pelajaran/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_PELAJARAN" class="col-md-4 control-label">Pelajaran</label>
		<div class="col-md-8">
			<select name="ID_PELAJARAN" class="form-control">
				<option value="">select pelajaran</option>
				<?php 
				foreach($all_pelajarans as $pelajaran)
				{
					$selected = ($pelajaran['ID_PELAJARAN'] == $this->input->post('ID_PELAJARAN')) ? ' selected="selected"' : "";

					echo '<option value="'.$pelajaran['ID_PELAJARAN'].'" '.$selected.'>'.$pelajaran['NAMA_PELAJARAN'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="TEKS_SOAL_PELAJARAN" class="col-md-4 control-label">TEKS SOAL PELAJARAN</label>
		<div class="col-md-8">
			<textarea name="TEKS_SOAL_PELAJARAN" class="form-control" id="TEKS_SOAL_PELAJARAN"><?php echo $this->input->post('TEKS_SOAL_PELAJARAN'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>