<h6>Daftar Buku</h6>
<?php echo $this->Session->flash();?>
<p>&nbsp;</p>
<div>

	<?php
		/*echo $this->Form->create('Book', array('action' => 'cari'));
 		echo $this->Form->input('Book.judul');
		echo $this->Form->end('Search');*/
	?>
</div>
<table>
	<thead>
		<tr>
            <th>
                <a href="<?php echo $this->Html->url(array('controller'=>'books','action'=>'tambah')); ?>">
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
	<tr><td colspan="4">Belum ada data buku.</td></tr>
	<?php 
	} else {
		// jika sudah ada data akun user
		foreach($data as $b):
	?>
            <td style="width:100px;">
                <div class="btn-group">
                    <a href="#" data-dropdown="drop<?php echo $b['Book']['id'] ?>" class="small secondary radius button dropdown" >Action </a><br>
                    <ul id="drop<?php echo $b['Book']['id'] ?>" data-dropdown-content class="f-dropdown">
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Books',
                                    'action'=>'ubah',
                                    $b['Book']['id'])); ?>">
                                Ubah
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Books',
                                    'action'=>'hapus',
                                    $b['Book']['id'])); ?>"
                               onclick="return confirm('Yakin untuk dihapus?');">
                                Hapus
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $this->Html->url(
                                array('controller' => 'Buys',
                                    'action'=>'beli',
                                    $b['Book']['id'])); ?>" >
                               Beli
                            </a>
                        </li>


                    </ul>
                </div>
            </td>
	<td><?php echo $b['Book']['judul']; ?></td>
	<td><?php echo $b['Book']['keterangan']; ?></td>
	<td><?php echo $b['Book']['harga']; ?></td>

	</tr>
	<?php
		endforeach;
	}
	?>

</table>