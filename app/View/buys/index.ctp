<h6>Daftar Pembeli</h6>
<p>&nbsp;</p>
<div>

</div>
<table>
	<thead>
		<tr>
			<th>Nama</th>
			<th>Judul</th>
			<th>No. Telp</th>
			<th>Keterangan Tambahan</th>
			<th>Action</th>

		</tr>
	</thead>
	<?php 
	// jika tidak ada data user
	if (sizeof($data) == 0) {
	?>
	<tr><td colspan="4">Belum ada data pembeli.</td></tr>
	<?php 
	} else {
		// jika sudah ada data akun user
		foreach($data as $b):
	?>
	<td><?php echo $b['Buy']['nama']; ?></td>
	<td><?php echo $b['Buy']['judul']; ?></td>
	<td><?php echo $b['Buy']['notelp']; ?></td>
	<td><?php echo $b['Buy']['keterangantambahan']; ?></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'buys', 'action'=>'hapus', $b['Buy']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	</tr>
	<?php
		endforeach;
	}
	?>

</table>