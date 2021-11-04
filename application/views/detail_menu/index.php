<div class="pull-right">
	<a href="<?php echo site_url('detail_menu/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID DETAIL MENU</th>
		<th>ID PARENT</th>
		<th>TEKS MENU</th>
		<th>ICONS</th>
		<th>LINK</th>
		<th>Actions</th>
    </tr>
	<?php foreach($detail_menus as $T){ ?>
    <tr>
		<td><?php echo $T['ID_DETAIL_MENU']; ?></td>
		<td><?php echo $T['ID_PARENT']; ?></td>
		<td><?php echo $T['TEKS_MENU']; ?></td>
		<td><?php echo $T['ICONS']; ?></td>
		<td><?php echo $T['LINK']; ?></td>
		<td>
            <a href="<?php echo site_url('detail_menu/edit/'.$T['ID_DETAIL_MENU']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('detail_menu/remove/'.$T['ID_DETAIL_MENU']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
