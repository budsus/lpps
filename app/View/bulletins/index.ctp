<?php echo $this->Session->flash();?>
<h6>Daftar Bulletin</h6>
<p>&nbsp;</p>
<?php if($this->Session->check('user')){?>
<h5><button class='button secondary'><a href="<?php echo $this->Html->url(
            array('controller'=>'bulletins',
                'action' => 'tambah')); ?>">Tambah Buletin</a></h5>

<?php }?>
<table>
	
	<?php 
	// jika tidak ada data user
	if (sizeof($data) == 0) {
	?>
	<tr><td colspan="4">Belum ada data bulletin.</td></tr>
	<?php 
	} else {
		// jika sudah ada data akun user
        ?>

        <?php if($this->Session->check('user')){?>
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
        <?php }?>
        <?php
		foreach($data as $l):
			$directory=$l['Bulletin']['cover_dir'];
		    $file=$l['Bulletin']['cover'];
			$path=  $this->webroot.'app/webroot/files/bulletin/cover/'.$directory.'/'.$file ;

			if ($this->Session->check('user')) {

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

			  }
			  else
			  {
			  ?>
			  <div class="large-4 small-6 columns">
              <img width="200px" height="200px" src="<?php echo $path; ?>">

              <div class="panel">
                <h5><?php echo $l['Bulletin']['judul']; ?></h5>
                <h6 class="subheader">Harga : <?php echo $l['Bulletin']['harga']; ?></h6>
                <class="subheader"><?php echo $l['Bulletin']['keterangan']; ?><br><br>
                <class="subheader">Periode : <?php echo $l['Bulletin']['periode']; ?>
                <h6 class="class='button secondary"><a href="<?php echo $this->Html->url(
									array('controller' => 'buybulletins', 'action'=>'beli', $l['Bulletin']['id'])); ?>">
						Beli</a></h6>
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