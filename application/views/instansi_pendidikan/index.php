<div class="pull-right">
	<a href="<?php echo site_url('instansi_pendidikan/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID INSTANSI PENDIDIKAN</th>
		<th>ID STATUS INSTANSI</th>
		<th>NAMA INSTANSI PENDIDIKAN</th>
		<th>ALAMAT INSTANSI PENDIDIKAN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($instansi_pendidikans as $T){ ?>
    <tr>
		<td><?php echo $T['ID_INSTANSI_PENDIDIKAN']; ?></td>
		<td><?php echo $T['ID_STATUS_INSTANSI']; ?></td>
		<td><?php echo $T['NAMA_INSTANSI_PENDIDIKAN']; ?></td>
		<td><?php echo $T['ALAMAT_INSTANSI_PENDIDIKAN']; ?></td>
		<td>
            <a href="<?php echo site_url('instansi_pendidikan/edit/'.$T['ID_INSTANSI_PENDIDIKAN']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('instansi_pendidikan/remove/'.$T['ID_INSTANSI_PENDIDIKAN']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
