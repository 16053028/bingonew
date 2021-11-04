<?php echo form_open('kartu_bingo/edit/'.$kartu_bingo['ID_KARTU_BINGO'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="TGL_DIBUAT" class="col-md-4 control-label">TGL DIBUAT</label>
		<div class="col-md-8">
			<input type="text" name="TGL_DIBUAT" value="<?php echo ($this->input->post('TGL_DIBUAT') ? $this->input->post('TGL_DIBUAT') : $kartu_bingo['TGL_DIBUAT']); ?>" class="form-control" id="TGL_DIBUAT" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>