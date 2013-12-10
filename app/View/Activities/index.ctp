<?php echo $this->Session->flash();
if($this->Session->check('user')) { ?>
<div class="row">
    <div class="large-12 columns" >
<h2>Informasi Kegiatan</h2>
<?php echo $this->Session->flash();?>

<p>Halaman ini memuat daftar kegiatan yang diselenggarakan oleh LPPS</p>

<table>
    <tr>
        <th>
            <a href="<?php echo $this->Html->url(array('controller'=>'Activities','action'=>'add')); ?>">
                <button class="btn btn-primary" type="button">Tambah baru</button>
            </a>
        </th>
        <th>Nama Kegiatan</th>
        <th>Tanggal Pelaksanaan</th>
    </tr>
    <?php foreach($activities as $activity): ?>
    <tr>
        <td style="width:100px;">
            <div class="btn-group">
                <a href="#" data-dropdown="drop<?php echo $activity['Activity']['id'] ?>" class="small secondary radius button dropdown" >Menu </a><br>
                <ul id="drop<?php echo $activity['Activity']['id'] ?>" data-dropdown-content class="f-dropdown">
                    <li>
                        <a href="<?php echo $this->Html->url(
                            array('controller' => 'Activities',
                                'action'=>'edit',
                                $activity['Activity']['id'])); ?>">
                            Ubah
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(
                            array('controller' => 'Activities',
                                'action'=>'delete',
                                $activity['Activity']['id'])); ?>"
                           onclick="return confirm('Yakin untuk dihapus?');">
                            Hapus
                        </a>
                    </li>



                </ul>
            </div>
        </td>
        <td><?php echo $this->Html->link($activity['Activity']['nama_kegiatan'],
                array('controller' => 'activities', 'action' => 'detail', $activity['Activity']['id'])); ?></td>
        <td><?php echo $activity['Activity']['tgl_pelaksanaan']; ?></td>

    </tr>
    <?php endforeach ?>

</table>

        </div>
</div>
<?php } else {
    App::uses('CakeTime', 'Utility');
    ?>
<h2>Informasi Kegiatan</h2>
<?php echo $this->Session->flash();?>
<p>Halaman ini memuat daftar kegiatan yang diselenggarakan oleh LPPS</p>

<table>
    <?php

    foreach($activities as $activity): ?>
        <tr>
            <td><?php
                $directory=$activity['Activity']['poster_dir'];
                $file=$activity['Activity']['poster'];
                $path=  $this->webroot.'app/webroot/files/activity/poster/'.$directory.'/'.$file ;
                if(!$file)
                {
                    echo 'Tidak ada poster';
                }
                else{?>

                    <a href="<?php echo $path;?>"><img src="<?php echo $path;?>" height="40%" width="40%"></a></li>
                <?php } ?>
            </td>
            <td><h3><?php
                    echo $this->Html->link($activity['Activity']['nama_kegiatan'],
                        array('controller' => 'activities', 'action' => 'detail', $activity['Activity']['id']));?></h3><br />
                <b>Tanggal Pelaksanaan</b> : <?php echo $activity['Activity']['tgl_pelaksanaan']; ?><br />
                <?php echo  $activity['Activity']['deskripsi_singkat'];?><br />
                <b>Tgl. Pendaftaran Terakhir</b> : <?php echo $activity['Activity']['deadline']; ?><br />
                <b>Jml. Maks. Pendaftar</b> : <?php echo $activity['Activity']['max_peserta']; ?>
            </td>
            <td>
                <?php
                if(CakeTime::isPast($activity['Activity']['deadline']))
                {
                    ?><button class="button disabled">Pendaftaran ditutup</button><?php
                } else {
                    if($activity['Activity']['participant_count'] >= $activity['Activity']['max_peserta'])
                    {?>
                        <a href="<?php echo $this->Html->url(
                            array('controller' => 'Participants',
                                'action'=>'add',
                                $activity['Activity']['id'])); ?>" onclick="return confirm('Kuota peserta sudah penuh. Apabila akan diadakan gelombang kedua/selanjutnya, apakah anda ingin mengikuti acara gelombang selanjutnya? Data anda akan ditampung untuk dihubungi untuk informasi lebih lanjut.');">
                            <button>Daftar Sebagai Peserta</button></a>
                    <?php } else { ?>
                        <a href="<?php echo $this->Html->url(
                            array('controller' => 'Participants',
                                'action'=>'add',
                                $activity['Activity']['id'])); ?>">
                            <button>Daftar Sebagai Peserta</button></a>
                    <?php } } ?>
             </td>
        </tr>
    <?php endforeach; ?>



</table>

<?php }?>