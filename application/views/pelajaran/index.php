<div class="pull-right">
	<a href="<?php echo site_url('pelajaran/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID PELAJARAN</th>
		<th>NAMA RUANG</th>
		<th>NAMA PELAJARAN</th>
		<th>KETERANGAN PELAJARAN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pelajarans as $T){ ?>
    <tr>
		<td><?php echo $T['ID_PELAJARAN']; ?></td>
		<td><?php echo $T['NAMA_RUANG']; ?></td>
		<td><?php echo $T['NAMA_PELAJARAN']; ?></td>
		<td><?php echo $T['KETERANGAN_PELAJARAN']; ?></td>
		<td>
            <a href="<?php echo site_url('pelajaran/edit/'.$T['ID_PELAJARAN']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pelajaran/remove/'.$T['ID_PELAJARAN']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
