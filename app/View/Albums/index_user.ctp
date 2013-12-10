<h4><dl class="sub-nav">

        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Profiles',
                    'action' => 'index_user')); ?>">Profil  </a></dd>
        <dd><a href="<?php echo $this->Html->url(
                array('controller'=>'Staffs',
                    'action' => 'index_user')); ?>">Staff  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Penguruses',
                    'action' => 'index_user')); ?>">Pengurus  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkjs',
                    'action' => 'index_user')); ?>">Daftar Alamat GKJ  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkis',
                    'action' => 'index_user')); ?>">Daftar Alamat GKI  </a></dd>
        <dd class="active" ><a href="<?php echo $this->Html->url(
                array('controller'=>'Albums',
                    'action' => 'index_user')); ?>">Galery  </a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Sahabats',
                    'action' => 'index_user')); ?>">Sahabat LPPS  </a></dd>
    </dl></h4>

<?php echo $this->Session->flash();?>

    <h2>Galeri Foto</h2>
    <p>&nbsp;</p>
    <table class="table table-hover">
        <thead>
        <tr>

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

                    <td style="width:150px;"><?php echo $u['Album']['nama']; ?></td>
                    <td style="width:100px;">
                        <a href="<?php echo $this->Html->url(
                            array('controller' => 'Albums',
                                'action'=>'lihat_user',
                                $nomorid)); ?>">
                            <button class="btn btn-primary" type="button">Buka</button>
                        </a>
                    </td>


                </tr>
            <?php
            endforeach;
        }
        ?>
    </table>
