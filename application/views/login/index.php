<div class="pull-right">
	<a href="<?php echo site_url('login/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID TBL LOGIN</th>
		<th>USERNAME LOGIN</th>
		<th>PASSWORD LOGIN</th>
		<th>LAST LOGIN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($logins as $T){ ?>
    <tr>
		<td><?php echo $T['ID_TBL_LOGIN']; ?></td>
		<td><?php echo $T['USERNAME_LOGIN']; ?></td>
		<td><?php echo $T['PASSWORD_LOGIN']; ?></td>
		<td><?php echo $T['LAST_LOGIN']; ?></td>
		<td>
            <a href="<?php echo site_url('login/edit/'.$T['ID_TBL_LOGIN']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('login/remove/'.$T['ID_TBL_LOGIN']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
