<?php echo form_open('user/edit/'.$user['ID_USER'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="ID_USER_DETAILS" class="col-md-4 control-label">User Detail</label>
		<div class="col-md-8">
			<select name="ID_USER_DETAILS" class="form-control">
				<option value="">select user_detail</option>
				<?php 
				foreach($all_user_details as $user_detail)
				{
					$selected = ($user_detail['ID_USER_DETAILS'] == $user['ID_USER_DETAILS']) ? ' selected="selected"' : "";

					echo '<option value="'.$user_detail['ID_USER_DETAILS'].'" '.$selected.'>'.$user_detail['NAMA_USER'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="ID_TBL_LOGIN" class="col-md-4 control-label">Login</label>
		<div class="col-md-8">
			<select name="ID_TBL_LOGIN" class="form-control">
				<option value="">select login</option>
				<?php 
				foreach($all_logins as $login)
				{
					$selected = ($login['ID_TBL_LOGIN'] == $user['ID_TBL_LOGIN']) ? ' selected="selected"' : "";

					echo '<option value="'.$login['ID_TBL_LOGIN'].'" '.$selected.'>'.$login['USERNAME_LOGIN'].'</option>';
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
					$selected = ($status_user['ID_STATUS_USER'] == $user['ID_STATUS_USER']) ? ' selected="selected"' : "";

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