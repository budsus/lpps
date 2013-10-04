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
<?php
$this->Facebook->share($this->Html->link(
    '/activities/detail/%s','id'));
//array('controller' => 'activities', 'action' => 'detail', $activity['Activity']['id'])));
?>

<?php
//$namabrosur = h(['Activity']['brosur']);
//$id = ['Activity']['id'];
//$html->link('Pdf', '/files/activity/brosur/%s/%s',$id,$namabrosur);
?>