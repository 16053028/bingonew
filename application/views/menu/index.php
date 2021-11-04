<div class="pull-right">
	<a href="<?php echo site_url('menu/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID MENU</th>
		<th>ID DETAIL MENU</th>
		<th>ID STATUS USER</th>
		<th>Actions</th>
    </tr>
	<?php foreach($menus as $T){ ?>
    <tr>
		<td><?php echo $T['ID_MENU']; ?></td>
		<td><?php echo $T['ID_DETAIL_MENU']; ?></td>
		<td><?php echo $T['ID_STATUS_USER']; ?></td>
		<td>
            <a href="<?php echo site_url('menu/edit/'.$T['ID_MENU']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('menu/remove/'.$T['ID_MENU']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
