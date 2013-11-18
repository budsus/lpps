<?php echo $this->Session->flash();?>

    <h2>Galeri Foto</h2>
    <p>&nbsp;</p>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>
                <a href="<?php echo $this->Html->url(array('controller'=>'Albums','action'=>'tambah')); ?>">
                    <button class="btn btn-primary" type="button">Buat Album Baru</button>
                </a>
            </th>
            <th>Nama Album</th>

        </tr>
        </thead>
        <?php
        // jika tidak ada data user
        if (sizeof($data) == 0) {
            ?>
            <tr><td colspan="4">Belum ada album foto</td></tr>
        <?php
        } else {
            // jika sudah ada data akun user
            foreach($data as $u):
                $nomorid=$u['Album']['id'];
                ?>
                <tr>
                    <td style="width:100px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $nomorid ?>" class="small secondary radius button dropdown" >Action </a><br>
                            <ul id="drop<?php echo $nomorid ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Albums',
                                            'action'=>'edit',
                                            $nomorid)); ?>">
                                        Ubah nama
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Albums',
                                            'action'=>'hapus',
                                            $nomorid)); ?>"
                                       onclick="return confirm('Yakin untuk dihapus?');">
                                        Hapus
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Albums',
                                            'action'=>'upload',
                                            $nomorid)); ?>" >
                                        Tambah Foto
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Albums',
                                            'action'=>'lihat',
                                            $nomorid)); ?>">
                                        Lihat Foto
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </td>
                    <td style="width:150px;"><?php echo $u['Album']['nama']; ?></td>

                </tr>
            <?php
            endforeach;
        }
        ?>
    </table>
