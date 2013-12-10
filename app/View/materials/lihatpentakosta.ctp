<?php echo $this->Session->flash();?>
<h6>Daftar Material Masa Pentakosta</h6>

<p>&nbsp;</p>
<h6>2014</h6>
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
			 if($m['Material']['event'] == 'Pentakosta' && $m['Material']['tahun'] == '2014'){
	?>
	
		<td><?php echo $m['Material']['judul']; ?></td>
		<td><?php echo $m['Material']['keterangan']; ?></td>
	
	

	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'hapus', $m['Material']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'ubah', $m['Material']['id'])); ?>">
						Ubah</a></td>
		
	<td class='button secondary'><?php echo $this->Html->link('Download',array('action' => 'download',$m['Material']['id'])); ?></td>
	</tr>

	<?php
	}	
		endforeach;
	}
	?>

</table>

<h6>2015</h6>
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
			 if($m['Material']['event'] == 'Pentakosta' && $m['Material']['tahun'] == '2015'){
	?>
	
		<td><?php echo $m['Material']['judul']; ?></td>
		<td><?php echo $m['Material']['keterangan']; ?></td>
	
	

	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'hapus', $m['Material']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'ubah', $m['Material']['id'])); ?>">
						Ubah</a></td>
		
	<td class='button secondary'><?php echo $this->Html->link('Download',array('action' => 'download',$m['Material']['id'])); ?></td>
	</tr>

	<?php
	}	
		endforeach;
	}
	?>

</table>

<h6>2016</h6>
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
			 if($m['Material']['event'] == 'Pentakosta' && $m['Material']['tahun'] == '2016'){
	?>
	
		<td><?php echo $m['Material']['judul']; ?></td>
		<td><?php echo $m['Material']['keterangan']; ?></td>
	
	

	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'hapus', $m['Material']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'ubah', $m['Material']['id'])); ?>">
						Ubah</a></td>
		
	<td class='button secondary'><?php echo $this->Html->link('Download',array('action' => 'download',$m['Material']['id'])); ?></td>
	</tr>

	<?php
	}	
		endforeach;
	}
	?>

</table>

<h6>2017</h6>
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
			 if($m['Material']['event'] == 'Pentakosta' && $m['Material']['tahun'] == '2017'){
	?>
	
		<td><?php echo $m['Material']['judul']; ?></td>
		<td><?php echo $m['Material']['keterangan']; ?></td>
	
	

	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'hapus', $m['Material']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'materials', 'action'=>'ubah', $m['Material']['id'])); ?>">
						Ubah</a></td>
		
	<td class='button secondary'><?php echo $this->Html->link('Download',array('action' => 'download',$m['Material']['id'])); ?></td>
	</tr>

	<?php
	}	
		endforeach;
	}
	?>

</table>