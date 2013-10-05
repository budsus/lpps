<h6>Daftar Bulletin</h6>
<p>&nbsp;</p>
<table>
	<thead>
		<tr>
			<th>Judul</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th colspan="3">Action</th
		</tr>
	</thead>
	<?php 
	// jika tidak ada data user
	if (sizeof($data) == 0) {
	?>
	<tr><td colspan="4">Belum ada data bulletin.</td></tr>
	<?php 
	} else {
		// jika sudah ada data akun user
		foreach($data as $l):
	?>
	<td><?php echo $l['Bulletin']['judul']; ?></td>
	<td><?php echo $l['Bulletin']['keterangan']; ?></td>
	<td><?php echo $l['Bulletin']['harga']; ?></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'bulletins', 'action'=>'hapus', $l['Bulletin']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'bulletins', 'action'=>'ubah', $l['Bulletin']['id'])); ?>">
						Ubah</a></td>
	</tr>
	<?php
		endforeach;
	}
	?>

</table>