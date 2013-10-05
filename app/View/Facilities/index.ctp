<?php echo $this->Session->flash();?>

<h2>Daftar Fasilitas</h2>
<p>&nbsp;</p>
<table class="table table-hover">
    <thead>
    <tr>
        <th>
            <a href="<?php echo $this->Html->url(array('controller'=>'Facilities','action'=>'tambah')); ?>">
                <button class="btn btn-primary" type="button">Tambah baru</button>
            </a>
        </th>
        <th>Nama fasilitas</th>
        <th>Keterangan</th>
        <th>Biaya</th>
        <th>Warna</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data Fasilitas</td></tr>
    <?php
    } else {
        // jika sudah ada data akun user
        foreach($data as $u):
            $nomorid=$u['Facility']['id'];
            ?>
            <tr>
                <td style="width:100px;">
                    <div class="btn-group">
                        <a href="#" data-dropdown="drop<?php echo $nomorid ?>" class="small secondary radius button dropdown" >Action </a><br>
                        <ul id="drop<?php echo $nomorid ?>" data-dropdown-content class="f-dropdown">
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Facilities',
                                        'action'=>'edit',
                                       $nomorid)); ?>">
                                    Ubah
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Facilities',
                                        'action'=>'hapus',
                                        $nomorid)); ?>"
                                   onclick="return confirm('Yakin untuk dihapus?');">
                                    Hapus
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Facilities',
                                        'action'=>'lihat',
                                        $nomorid)); ?>">
                                    Lihat Foto
                                </a>
                            </li>

                        </ul>
                    </div>
                </td>
                <td style="width:150px;"><?php echo $u['Facility']['nama']; ?></td>
                <td style="width:250px;"><?php echo $u['Facility']['keterangan']; ?></td>
                <td style="width:100px;"><?php echo $u['Facility']['biaya']; ?></td>
                <td style="width:100px;"><?php echo $u['Facility']['color']; ?></td>
            </tr>
        <?php
        endforeach;
    }
    ?>
</table>

<?php echo $this->HTML->link('Download CSV',array( "action" => "download")); ?>