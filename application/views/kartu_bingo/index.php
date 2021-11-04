<div class="pull-right">
	<a href="<?php echo site_url('kartu_bingo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID KARTU BINGO</th>
		<th>TGL DIBUAT</th>
		<th>Actions</th>
    </tr>
	<?php foreach($kartu_bingos as $T){ ?>
    <tr>
		<td><?php echo $T['ID_KARTU_BINGO']; ?></td>
		<td><?php echo $T['TGL_DIBUAT']; ?></td>
		<td>
            <a href="<?php echo site_url('kartu_bingo/edit/'.$T['ID_KARTU_BINGO']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('kartu_bingo/remove/'.$T['ID_KARTU_BINGO']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
