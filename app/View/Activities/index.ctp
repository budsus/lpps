<h2>Informasi Kegiatan</h2>

<p>Halaman ini memuat daftar kegiatan yang diselenggarakan oleh LPPS</p>
<table>
    <tr>
        <th>Nama Kegiatan</th>
        <th>Penyelenggaraan</th>
    </tr>
    <?php foreach($activities as $activity): ?>
    <tr>
        <td><?php echo $this->Html->link($activity['Activity']['nama_kegiatan'],
                array('controller' => 'activities', 'action' => 'detail', $activity['Activity']['id'])); ?></td>
        <td><?php echo $activity['Activity']['penyelenggaraan']; ?></td>
        <td><div class="btn-group">
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    Action
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
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
            </div></td>
    </tr>
    <?php endforeach ?>

</table>

