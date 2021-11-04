<?php echo form_open('jawaban_soal/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_SOAL_PELAJARAN" class="col-md-4 control-label">Soal Pelajaran</label>
		<div class="col-md-8">
			<select name="ID_SOAL_PELAJARAN" class="form-control">
				<option value="">select soal_pelajaran</option>
				<?php 
				foreach($all_soal_pelajarans as $soal_pelajaran)
				{
					$selected = ($soal_pelajaran['ID_SOAL_PELAJARAN'] == $this->input->post('ID_SOAL_PELAJARAN')) ? ' selected="selected"' : "";

					echo '<option value="'.$soal_pelajaran['ID_SOAL_PELAJARAN'].'" '.$selected.'>'.$soal_pelajaran['TEKS_SOAL_PELAJARAN'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IS_KEY" class="col-md-4 control-label">IS KEY</label>
		<div class="col-md-8">
			<select name="IS_KEY" class="form-control">
				<option value="">select</option>
				<?php 
				$IS_KEY_values = array(
					'0'=>'Kunci Jawaban',
					'1'=>'Bukan Kunci Jawaban',
				);

				foreach($IS_KEY_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('IS_KEY')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="TEKS_JAWABAN_SOAL" class="col-md-4 control-label">TEKS JAWABAN SOAL</label>
		<div class="col-md-8">
			<textarea name="TEKS_JAWABAN_SOAL" class="form-control" id="TEKS_JAWABAN_SOAL"><?php echo $this->input->post('TEKS_JAWABAN_SOAL'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>