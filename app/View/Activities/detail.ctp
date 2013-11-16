<h1><?php echo h($post['Activity']['nama_kegiatan']); ?></h1><br />
<h3>Latar Belakang</h3>
<?php echo h($post['Activity']['latar_belakang']); ?> <br /><br />
<h3>Tujuan</h3>
<?php echo h($post['Activity']['tujuan']); ?> <br /><br />
<h3>Sasaran</h3>
<?php echo h($post['Activity']['sasaran']); ?> <br /><br />
<h3>Jadwal Kegiatan</h3>
<?php echo h($post['Activity']['jadwal_kegiatan']); ?> <br /><br />
<h3>Tempat</h3>
<?php echo h($post['Activity']['tempat']); ?> <br /><br />
<h3>Penanggung Jawab</h3>
<?php echo h($post['Activity']['penanggung_jawab']); ?> <br /><br />
<h3>Biaya Pendaftaran</h3>
<?php echo h($post['Activity']['biaya_pendaftaran']); ?> <br /><br />
<a href="<?php echo $this->Html->url(
    array('controller' => 'Participants',
        'action'=>'participantList',
        $post['Activity']['id'])); ?>"><button>Lihat Peserta</button></a>
<a href="<?php echo $this->Html->url(
    array('controller' => 'Participants',
        'action'=>'add',
        $post['Activity']['id'])); ?>"><button>Daftar Sebagai Peserta</button></a><br /><br />
<?php
echo $this->Html->link('Download Brosur',array('action' => 'download', $post['Activity']['id']));
?><br />
<h3>Poster</h3>
<?php

    $directory=$post['Activity']['poster_dir'];

    $file=$post['Activity']['poster'];
    $path=  $this->webroot.'app/webroot/files/activity/poster/'.$directory.'/'.$file ;
?>
<a href="<?php echo $path;?>"><img src="<?php echo $path;?>"></a></li>
