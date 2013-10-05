<h2><?php echo h($post['Activity']['nama_kegiatan']); ?></h2><br />
<h1>Latar Belakang</h1>
<?php echo h($post['Activity']['latar_belakang']); ?> <br /><br />
<h1>Tujuan</h1>
<?php echo h($post['Activity']['tujuan']); ?> <br /><br />
<h1>Sasaran</h1>
<?php echo h($post['Activity']['sasaran']); ?> <br /><br />
<h1>Jadwal Kegiatan</h1>
<?php echo h($post['Activity']['jadwal_kegiatan']); ?> <br /><br />
<h1>Tempat</h1>
<?php echo h($post['Activity']['tempat']); ?> <br /><br />
<h1>Penanggung Jawab</h1>
<?php echo h($post['Activity']['penanggung_jawab']); ?> <br /><br />
<h1>Biaya Pendaftaran</h1>
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
$this->Facebook->share(
    'http://www.google.com');
//array('controller' => 'activities', 'action' => 'detail', $activity['Activity']['id'])));
?>

<a href="#"
   onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;">
    Share on Facebook
</a ><br /> <br/>

<?php
echo $this->Html->link('download brosur',array('action' => 'download', $post['Activity']['id']));
?>