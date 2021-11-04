<div class="pull-right">
	<a href="<?php echo site_url('status_instansi/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID STATUS INSTANSI</th>
		<th>TEKS STATUS INSTANSI</th>
		<th>KETERANGAN STATUS INSTANSI</th>
		<th>Actions</th>
    </tr>
	<?php foreach($status_instansis as $T){ ?>
    <tr>
		<td><?php echo $T['ID_STATUS_INSTANSI']; ?></td>
		<td><?php echo $T['TEKS_STATUS_INSTANSI']; ?></td>
		<td><?php echo $T['KETERANGAN_STATUS_INSTANSI']; ?></td>
		<td>
            <a href="<?php echo site_url('status_instansi/edit/'.$T['ID_STATUS_INSTANSI']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('status_instansi/remove/'.$T['ID_STATUS_INSTANSI']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
