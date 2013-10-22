<h6>Daftar Bulletin</h6>
<p>&nbsp;</p>
<table>
	<thead>
		<tr>
            <th>
                <a href="<?php echo $this->Html->url(array('controller'=>'Bulletins','action'=>'tambah')); ?>">
                    <button class="btn btn-primary" type="button">Tambah baru</button>
                </a>
            </th>
			<th>Judul</th>
			<th>Keterangan</th>
			<th>Harga</th>

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
            <td style="width:100px;">
                <div class="btn-group">
                    <a href="#" data-dropdown="drop<?php echo $l['Bulletin']['id'] ?>" class="small secondary radius button dropdown" >Action </a><br>
                    <ul id="drop<?php echo $l['Bulletin']['id'] ?>" data-dropdown-content class="f-dropdown">
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Bulletins',
                                    'action'=>'ubah',
                                    $l['Bulletin']['id'])); ?>">
                                Ubah
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Bulletins',
                                    'action'=>'hapus',
                                    $l['Bulletin']['id'])); ?>"
                               onclick="return confirm('Yakin untuk dihapus?');">
                                Hapus
                            </a>
                        </li>


                    </ul>
                </div>
            </td>
	<td><?php echo $l['Bulletin']['judul']; ?></td>
	<td><?php echo $l['Bulletin']['keterangan']; ?></td>
	<td><?php echo $l['Bulletin']['harga']; ?></td>

	</tr>
	<?php
		endforeach;
	}
	?>

</table>