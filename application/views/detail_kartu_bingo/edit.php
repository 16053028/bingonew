<?php echo form_open('detail_kartu_bingo/edit/'.$detail_kartu_bingo['ID_DETAIL_KARTU_BINGO'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_SOAL_PELAJARAN" class="col-md-4 control-label">Soal Pelajaran</label>
		<div class="col-md-8">
			<select name="ID_SOAL_PELAJARAN" class="form-control">
				<option value="">select soal_pelajaran</option>
				<?php 
				foreach($all_soal_pelajarans as $soal_pelajaran)
				{
					$selected = ($soal_pelajaran['ID_SOAL_PELAJARAN'] == $detail_kartu_bingo['ID_SOAL_PELAJARAN']) ? ' selected="selected"' : "";

					echo '<option value="'.$soal_pelajaran['ID_SOAL_PELAJARAN'].'" '.$selected.'>'.$soal_pelajaran['TEKS_SOAL_PELAJARAN'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ID_KARTU_BINGO" class="col-md-4 control-label">Kartu Bingo</label>
		<div class="col-md-8">
			<select name="ID_KARTU_BINGO" class="form-control">
				<option value="">select kartu_bingo</option>
				<?php 
				foreach($all_kartu_bingos as $kartu_bingo)
				{
					$selected = ($kartu_bingo['ID_KARTU_BINGO'] == $detail_kartu_bingo['ID_KARTU_BINGO']) ? ' selected="selected"' : "";

					echo '<option value="'.$kartu_bingo['ID_KARTU_BINGO'].'" '.$selected.'>'.$kartu_bingo['ID_KARTU_BINGO'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>