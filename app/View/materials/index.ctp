<?php echo $this->Session->flash();?>

<h6>Daftar Material</h6>
<p>&nbsp;</p>
<table>
	<?php
    if($this->Session->check('user')) { ?>
     <h5><button class='button secondary'><a href="<?php echo $this->Html->url(
              array('controller'=>'materials',
                    'action' => 'tambah')); ?>">Tambah Materi Pembinaan</a></h5>
	<thead>
		<tr>
			<th>Judul</th>
			<th>Keterangan</th>
			<th colspan="3">Action</th
		</tr>
	</thead>
	<?php }
	// jika tidak ada data user
	if (sizeof($data) == 0) {
	?>
	<tr><td colspan="4">Belum ada data materi pembinaan.</td></tr>
	<?php 
	} else {
		// jika sudah ada data akun user
		foreach($data as $m):

	?>
		<td><?php echo $m['Material']['judul']; ?></td>
	<td><?php echo $m['Material']['keterangan']; ?></td>
	
	<?php
			  if ($this->Session->check('user')) {

			  ?>

	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'hapus', $m['Material']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'ubah', $m['Material']['id'])); ?>">
						Ubah</a></td>
		<?php

		  }
		  ?>
	<td class='button secondary'><?php echo $this->Html->link('Download',array('action' => 'download',$m['Material']['id'])); ?></td>
	</tr>

	<?php
		endforeach;
	}
	?>

</table>