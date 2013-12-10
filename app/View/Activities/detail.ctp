<?php App::uses('CakeTime', 'Utility'); ?>
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
<h3>Tanggal Pendaftaran Terakhir</h3>
<?php echo h($post['Activity']['deadline']); ?> <br /><br />
<h3>Jumlah Maksimal Peserta</h3>
<?php echo h($post['Activity']['max_peserta']); ?> <br /><br />
<h3>Jumlah Peserta Terdaftar</h3>
<?php echo h($post['Activity']['participant_count']); ?> <br /><br />
<a href="<?php echo $this->Html->url(
    array('controller' => 'Participants',
        'action'=>'participantList',
        $post['Activity']['id'])); ?>"><button>Lihat Peserta</button></a>
<?php
if(CakeTime::isPast($post['Activity']['deadline']))
{
    ?><button class="button disabled">Pendaftaran ditutup</button><?php
} else {
    if($post['Activity']['participant_count'] >= $post['Activity']['max_peserta'])
    {?>
        <a href="<?php echo $this->Html->url(
            array('controller' => 'Participants',
                'action'=>'add',
                $post['Activity']['id'])); ?>" onclick="return confirm('Kuota peserta sudah penuh. Apabila akan diadakan gelombang kedua/selanjutnya, apakah anda ingin mengikuti acara gelombang selanjutnya? Data anda akan ditampung untuk dihubungi untuk informasi lebih lanjut.');">
            <button>Daftar Sebagai Peserta</button></a>
    <?php } else { ?>
        <a href="<?php echo $this->Html->url(
            array('controller' => 'Participants',
                'action'=>'add',
                $post['Activity']['id'])); ?>">
            <button>Daftar Sebagai Peserta</button></a>
    <?php } } ?>
<br /><br />
<?php
    $brosur = $post['Activity']['brosur'];
if($brosur){
    echo $this->Html->link('Download Brosur',array('action' => 'download', $post['Activity']['id']));
}
else
{
    echo 'Brosur tidak tersedia';
}
?><br />
<h3>Poster</h3>
<?php
    $directory=$post['Activity']['poster_dir'];
    $file=$post['Activity']['poster'];
    $path=  $this->webroot.'app/webroot/files/activity/poster/'.$directory.'/'.$file ;
    if(!$file)
    {
        echo 'Tidak ada poster';
    }
    else{?>

        <a href="<?php echo $path;?>"><img src="<?php echo $path;?>"></a></li>
<?php } ?>
