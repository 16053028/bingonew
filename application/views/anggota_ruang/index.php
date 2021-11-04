<div class="pull-right">
	<a href="<?php echo site_url('anggota_ruang/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID ANGGOTA RUANG</th>
		<th>ID USER</th>
		<th>ID RUANG</th>
		<th>IDENTIFIER ANGGOTA</th>
		<th>Actions</th>
    </tr>
	<?php foreach($anggota_ruangs as $T){ ?>
    <tr>
		<td><?php echo $T['ID_ANGGOTA_RUANG']; ?></td>
		<td><?php echo $T['ID_USER']; ?></td>
		<td><?php echo $T['ID_RUANG']; ?></td>
		<td><?php echo $T['IDENTIFIER_ANGGOTA']; ?></td>
		<td>
            <a href="<?php echo site_url('anggota_ruang/edit/'.$T['ID_ANGGOTA_RUANG']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('anggota_ruang/remove/'.$T['ID_ANGGOTA_RUANG']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
