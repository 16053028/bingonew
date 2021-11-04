<div class="pull-right">
	<a href="<?php echo site_url('user_detail/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID USER DETAILS</th>
		<th>NAMA USER</th>
		<th>ALAMAT USER</th>
		<th>JK USER</th>
		<th>TELP USER</th>
		<th>EMAIL USER</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_details as $T){ ?>
    <tr>
		<td><?php echo $T['ID_USER_DETAILS']; ?></td>
		<td><?php echo $T['NAMA_USER']; ?></td>
		<td><?php echo $T['ALAMAT_USER']; ?></td>
		<td><?php echo $T['JK_USER']; ?></td>
		<td><?php echo $T['TELP_USER']; ?></td>
		<td><?php echo $T['EMAIL_USER']; ?></td>
		<td>
            <a href="<?php echo site_url('user_detail/edit/'.$T['ID_USER_DETAILS']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user_detail/remove/'.$T['ID_USER_DETAILS']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
