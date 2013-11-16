<?php echo $this->Session->flash();?>
<h6>Daftar Bulletin</h6>
<p>&nbsp;</p>
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
	</tr>
	<?php
		endforeach;
	}
	?>
