<?php echo $this->Session->flash();?>
<h5><button class='button secondary'><a href="<?php echo $this->Html->url(
              array('controller'=>'bulletins',
                    'action' => 'tambah')); ?>">Tambah Buletin</a></h5>
<h6>Daftar Bulletin</h6>
<p>&nbsp;</p>
<table>
	<thead>
		<tr>
			<th>Judul</th>
			<th>Cover</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Periode</th>
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
			$directory=$l['Bulletin']['cover_dir'];
		    $file=$l['Bulletin']['cover'];
			$path=  $this->webroot.'app/webroot/files/bulletin/cover/'.$directory.'/'.$file ;

	?>
	
	<td><?php echo $l['Bulletin']['judul']; ?></td>
	<td><img width="200px" height="200px" src="<?php echo $path; ?>"></td>
	<td><?php echo $l['Bulletin']['keterangan']; ?></td>
	<td><?php echo $l['Bulletin']['harga']; ?></td>
	<td><?php echo $l['Bulletin']['periode']; ?></td>
	
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'bulletins', 'action'=>'hapus', $l['Bulletin']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'bulletins', 'action'=>'ubah', $l['Bulletin']['id'])); ?>">
						Ubah</a></td>
	
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'buybulletins', 'action'=>'beli', $l['Bulletin']['id'])); ?>">
						Beli</a></td>
	</tr>
	<?php
		endforeach;
	}
	?>

</table>