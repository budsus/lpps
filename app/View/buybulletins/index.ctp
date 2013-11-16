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
			<th>Status Pembelian</th>
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
	<td><?php echo $b['Buybulletin']['nama']; ?></td>
	<td><?php echo $b['Bulletin']['judul']; ?></td>
	<td><?php echo $b['Buybulletin']['notelp']; ?></td>
	<td><?php echo $b['Buybulletin']['keterangantambahan']; ?></td>
	<td><?php echo $b['Buybulletin']['statuspembelian']; ?></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'buybulletins', 'action'=>'ubah', $b['Buybulletin']['id'])); ?>);">
						Ubah Status</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'buybulletins', 'action'=>'hapus', $b['Buybulletin']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	</tr>
	<?php
		endforeach;
	}
	?>

</table>