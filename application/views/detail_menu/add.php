<?php echo form_open('detail_menu/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_PARENT" class="col-md-4 control-label">Detail Menu</label>
		<div class="col-md-8">
			<select name="ID_PARENT" class="form-control">
				<option value="">select detail_menu</option>
				<?php 
				foreach($all_detail_menus as $detail_menu)
				{
					$selected = ($detail_menu['ID_DETAIL_MENU'] == $this->input->post('ID_PARENT')) ? ' selected="selected"' : "";

					echo '<option value="'.$detail_menu['ID_DETAIL_MENU'].'" '.$selected.'>'.$detail_menu['TEKS_MENU'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="TEKS_MENU" class="col-md-4 control-label">TEKS MENU</label>
		<div class="col-md-8">
			<input type="text" name="TEKS_MENU" value="<?php echo $this->input->post('TEKS_MENU'); ?>" class="form-control" id="TEKS_MENU" />
		</div>
	</div>
	<div class="form-group">
		<label for="ICONS" class="col-md-4 control-label">ICONS</label>
		<div class="col-md-8">
			<input type="text" name="ICONS" value="<?php echo $this->input->post('ICONS'); ?>" class="form-control" id="ICONS" />
		</div>
	</div>
	<div class="form-group">
		<label for="LINK" class="col-md-4 control-label">LINK</label>
		<div class="col-md-8">
			<input type="text" name="LINK" value="<?php echo $this->input->post('LINK'); ?>" class="form-control" id="LINK" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>