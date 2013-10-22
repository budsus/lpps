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
        <th>Penyelenggaraan</th>
    </tr>
    <?php foreach($activities as $activity): ?>
    <tr>
        <td style="width:100px;">
            <div class="btn-group">
                <a href="#" data-dropdown="drop<?php echo $activity['Activity']['id'] ?>" class="small secondary radius button dropdown" >Action </a><br>
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
        <td><?php echo $activity['Activity']['penyelenggaraan']; ?></td>

    </tr>
    <?php endforeach ?>

</table>

