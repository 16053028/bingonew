<div class="pull-right">
	<a href="<?php echo site_url('soal_pelajaran/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID SOAL PELAJARAN</th>
		<th>NAMA PELAJARAN</th>
		<th>TEKS SOAL PELAJARAN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($soal_pelajarans as $T){ ?>
    <tr>
		<td><?php echo $T['ID_SOAL_PELAJARAN']; ?></td>
		<td><?php echo $T['NAMA_PELAJARAN']; ?></td>
		<td><?php echo $T['TEKS_SOAL_PELAJARAN']; ?></td>
		<td>
			<a href="<?php echo site_url('jawaban_soal/index/'.$T['ID_SOAL_PELAJARAN']); ?>" class="btn btn-info btn-xs">Jawaban</a> 
            <a href="<?php echo site_url('soal_pelajaran/edit/'.$T['ID_SOAL_PELAJARAN']); ?>" class="btn btn-info btn-xs">Edit Soal</a> 
            <a href="<?php echo site_url('soal_pelajaran/remove/'.$T['ID_SOAL_PELAJARAN']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
