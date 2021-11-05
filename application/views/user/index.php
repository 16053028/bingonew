<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID USER</th>
		<th>NAMA USER</th>
		<th>USERNAME LOGIN</th>
		<th>STATUS USER</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $T){ ?>
    <tr>
		<td><?php echo $T['ID_USER']; ?></td>
		<td><?php echo $T['NAMA_USER']; ?></td>
		<td><?php echo $T['USERNAME_LOGIN']; ?></td>
		<td><?php echo $T['TEKS_STATUS_USER']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$T['ID_USER']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$T['ID_USER']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
