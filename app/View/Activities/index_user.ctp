<h2>Informasi Kegiatan</h2>
<?php echo $this->Session->flash();?>
<p>Halaman ini memuat daftar kegiatan yang diselenggarakan oleh LPPS</p>

<table>
    <tr>
        <th>Kegiatan</th>
        <th>Penyelenggaraan</th>
        <th></th>
    </tr>
    <?php

    foreach($activities as $activity): ?>
        <tr>
            <td><h3><?php
                echo $this->Html->link($activity['Activity']['nama_kegiatan'],
                    array('controller' => 'activities', 'action' => 'detail', $activity['Activity']['id']));?></h3><br />
                <?php echo  $activity['Activity']['deskripsi_singkat'];?></td>
            <td><?php echo $activity['Activity']['penyelenggaraan']; ?></td>
            <td><a href="<?php echo $this->Html->url(
                    array('controller' => 'Participants',
                        'action'=>'add',
                        $activity['Activity']['id'])); ?>"><button>Daftar Sebagai Peserta</button></a><br /><br /></td>
        </tr>
    <?php endforeach; ?>



</table>

