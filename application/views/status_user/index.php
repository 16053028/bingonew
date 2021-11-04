<div class="pull-right">
	<a href="<?php echo site_url('status_user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID STATUS USER</th>
		<th>TEKS STATUS USER</th>
		<th>KETRANGAN  STATUS USER</th>
		<th>Actions</th>
    </tr>
	<?php foreach($status_users as $T){ ?>
    <tr>
		<td><?php echo $T['ID_STATUS_USER']; ?></td>
		<td><?php echo $T['TEKS_STATUS_USER']; ?></td>
		<td><?php echo $T['KETRANGAN__STATUS_USER']; ?></td>
		<td>
            <a href="<?php echo site_url('status_user/edit/'.$T['ID_STATUS_USER']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('status_user/remove/'.$T['ID_STATUS_USER']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
