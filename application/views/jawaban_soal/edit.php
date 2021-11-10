<?php echo form_open('jawaban_soal/edit/'.$this->uri->segment(3).'/'.$jawaban_soal['ID_JAWABAN_SOAL'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_SOAL_PELAJARAN" class="col-md-4 control-label">Soal Pelajaran</label>
		<div class="col-md-8">
			<select name="ID_SOAL_PELAJARAN" class="form-control">
				<?php foreach ($all_soal_pelajarans as $soal_pelajaran): ?>
					<option value="<?php echo $soal_pelajaran['ID_SOAL_PELAJARAN'] ?>" selected><?php echo $soal_pelajaran['TEKS_SOAL_PELAJARAN'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IS_KEY" class="col-md-4 control-label">IS KEY</label>
		<div class="col-md-8">
			<select name="IS_KEY" class="form-control">
				<?php 
				$IS_KEY_values = array(
					'1'=>'Kunci Jawaban',
					'0'=>'Bukan Kunci Jawaban',
				);

				foreach($IS_KEY_values as $value => $display_text)
				{
					$selected = ($value == $jawaban_soal['IS_KEY']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="TEKS_JAWABAN_SOAL" class="col-md-4 control-label">TEKS JAWABAN SOAL</label>
		<div class="col-md-8">
			<textarea name="TEKS_JAWABAN_SOAL" class="form-control" id="TEKS_JAWABAN_SOAL"><?php echo ($this->input->post('TEKS_JAWABAN_SOAL') ? $this->input->post('TEKS_JAWABAN_SOAL') : $jawaban_soal['TEKS_JAWABAN_SOAL']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>