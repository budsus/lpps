<h6>Daftar Material</h6>
<p>&nbsp;</p>
<table>
	<thead>
		<tr>
            <th>
                <a href="<?php echo $this->Html->url(array('controller'=>'Materials','action'=>'tambah')); ?>">
                    <button class="btn btn-primary" type="button">Tambah baru</button>
                </a>
            </th>
			<th>Judul</th>
			<th>Keterangan</th>

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

            <td style="width:100px;">
                <div class="btn-group">
                    <a href="#" data-dropdown="drop<?php echo $m['Material']['id'] ?>" class="small secondary radius button dropdown" >Action </a><br>
                    <ul id="drop<?php echo$m['Material']['id'] ?>" data-dropdown-content class="f-dropdown">
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Materials',
                                    'action'=>'ubah',
                                    $m['Material']['id'])); ?>">
                                Ubah
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Materials',
                                    'action'=>'hapus',
                                    $m['Material']['id'])); ?>"
                               onclick="return confirm('Yakin untuk dihapus?');">
                                Hapus
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Materials',
                                    'action'=>'download',
                                    $m['Material']['id'])); ?>" >
                                Download
                            </a>
                        </li>


                    </ul>
                </div>
            </td>
	<td><?php echo $m['Material']['judul']; ?></td>
	<td><?php echo $m['Material']['keterangan']; ?></td>

	</tr>
	<?php
		endforeach;
	}
	?>

</table>