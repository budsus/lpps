<?php echo $this->Session->flash();?>
<h6>Daftar Buku</h6>
<p>&nbsp;</p>
<div>

	<?php
    $this->Session->flash();
		/*echo $this->Form->create('Book', array('action' => 'cari'));
 		echo $this->Form->input('Book.judul');
		echo $this->Form->end('Search');*/
	?>
</div>
<table>
    <?php
    if($this->Session->check('user')) { ?>
    <h5><button class='button secondary'><a href="<?php echo $this->Html->url(
                array('controller'=>'books',
                    'action' => 'tambah')); ?>">Tambah Buku</a></h5>

	<?php }
	// jika tidak ada data user
	if (sizeof($data) == 0) {
	?>
	<tr><td colspan="4">Belum ada data buku.</td></tr>
	<?php 
	} else {
?>
        <thead>
        <tr>
            <th></th>
            <th>Judul</th>
            <th>Cover</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th colspan="3">Action</th>

        </tr>
        </thead>
        <?php
		// jika sudah ada data akun user
		foreach($data as $b):
			$directory=$b['Book']['cover_dir'];
		    $file=$b['Book']['cover'];
			$path=  $this->webroot.'app/webroot/files/book/cover/'.$directory.'/'.$file ;


            if($this->Session->check('user')) {

	?>



	<td><?php echo $b['Book']['judul']; ?></td>
	<td><img width="200" height="200" src="<?php echo $path; ?>"></td>
	<td><?php echo $b['Book']['keterangan']; ?></td>
	<td><?php echo $b['Book']['harga']; ?></td>

	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'books', 'action'=>'hapus', $b['Book']['id'])); ?>" onclick="return confirm('Yakin untuk dihapus?');">
						Hapus</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'books', 'action'=>'ubah', $b['Book']['id'])); ?>">
						Ubah</a></td>
	<td class='button secondary'> <a href="<?php echo $this->Html->url(
									array('controller' => 'buys', 'action'=>'beli', $b['Book']['id'])); ?>">
						Beli</a></td>
	</tr>
	<?php

			  }
			  else
			  {
			  ?>
			  <div class="large-4 small-6 columns">
              <img width="200px" height="200px" src="<?php echo $path; ?>">

              <div class="panel">
                <h5><?php echo $b['Book']['judul']; ?></h5>
                <h6 class="subheader">Harga : <?php echo $b['Book']['harga']; ?></h6>
                <class="subheader"><?php echo $b['Book']['keterangan']; ?>
                <h6 class="class='button secondary"><a href="<?php echo $this->Html->url(
                  array('controller' => 'buys', 'action'=>'beli', $b['Book']['id'])); ?>">Beli</a></h6>
              </div>
            </div>
			  <?php
			  }
			  ?>
	<?php
		endforeach;
	}
	?>

</table>