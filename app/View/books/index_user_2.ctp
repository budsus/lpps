<?php echo $this->Session->flash();?>
<h6>Daftar Material</h6>
<p>&nbsp;</p>
<table>
	<thead>
		<tr>
			<th>Judul</th>
			<th>Keterangan</th>
			<th colspan="3">Action</th
		</tr>
	</thead>
	<?php 
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
	
	<td class='button secondary'><?php echo $this->Html->link('Download',array('action' => 'download',$m['Material']['id'])); ?></td>
	</tr>
	<?php
		endforeach;
	}
	?>

</table>