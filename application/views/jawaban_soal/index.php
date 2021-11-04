<div class="pull-right">
	<a href="<?php echo site_url('jawaban_soal/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID JAWABAN SOAL</th>
		<th>ID SOAL PELAJARAN</th>
		<th>IS KEY</th>
		<th>TEKS JAWABAN SOAL</th>
		<th>Actions</th>
    </tr>
	<?php foreach($jawaban_soals as $T){ ?>
    <tr>
		<td><?php echo $T['ID_JAWABAN_SOAL']; ?></td>
		<td><?php echo $T['ID_SOAL_PELAJARAN']; ?></td>
		<td><?php echo $T['IS_KEY']; ?></td>
		<td><?php echo $T['TEKS_JAWABAN_SOAL']; ?></td>
		<td>
            <a href="<?php echo site_url('jawaban_soal/edit/'.$T['ID_JAWABAN_SOAL']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('jawaban_soal/remove/'.$T['ID_JAWABAN_SOAL']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
