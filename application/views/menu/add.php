<?php echo form_open('menu/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_DETAIL_MENU" class="col-md-4 control-label">Detail Menu</label>
		<div class="col-md-8">
			<select name="ID_DETAIL_MENU" class="form-control">
				<option value="">select detail_menu</option>
				<?php 
				foreach($all_detail_menus as $detail_menu)
				{
					$selected = ($detail_menu['ID_DETAIL_MENU'] == $this->input->post('ID_DETAIL_MENU')) ? ' selected="selected"' : "";

					echo '<option value="'.$detail_menu['ID_DETAIL_MENU'].'" '.$selected.'>'.$detail_menu['TEKS_MENU'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ID_STATUS_USER" class="col-md-4 control-label">Status User</label>
		<div class="col-md-8">
			<select name="ID_STATUS_USER" class="form-control">
				<option value="">select status_user</option>
				<?php 
				foreach($all_status_users as $status_user)
				{
					$selected = ($status_user['ID_STATUS_USER'] == $this->input->post('ID_STATUS_USER')) ? ' selected="selected"' : "";

					echo '<option value="'.$status_user['ID_STATUS_USER'].'" '.$selected.'>'.$status_user['TEKS_STATUS_USER'].'</option>';
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