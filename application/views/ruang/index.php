<div class="pull-right">
	<a href="<?php echo site_url('ruang/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID RUANG</th>
		<th>ID INSTANSI PENDIDIKAN</th>
		<th>NAMA RUANG</th>
		<th>KETERANGAN RUANG</th>
		<th>Actions</th>
    </tr>
	<?php foreach($ruangs as $T){ ?>
    <tr>
		<td><?php echo $T['ID_RUANG']; ?></td>
		<td><?php echo $T['ID_INSTANSI_PENDIDIKAN']; ?></td>
		<td><?php echo $T['NAMA_RUANG']; ?></td>
		<td><?php echo $T['KETERANGAN_RUANG']; ?></td>
		<td>
            <a href="<?php echo site_url('ruang/edit/'.$T['ID_RUANG']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('ruang/remove/'.$T['ID_RUANG']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
