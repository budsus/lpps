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
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Albums',
                    'action' => 'index_user')); ?>">Galery  </a></dd>
        <dd class="active"><a href="<?php echo $this->Html->url(
                array('controller'=>'Sahabats',
                    'action' => 'index_user')); ?>">Sahabat LPPS  </a></dd>

    </dl></h4>

<h2>Sahabat LPPS</h2>

<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Gereja</th>
        <th>Pekerjaan</th>
        <th>Kontak</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data </td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            ?>
            <tr>

                <td style="width:300px;"><?php echo $u['Sahabat']['nama']; ?></td>
                <td style="width:250px;"><?php echo $u['Sahabat']['gereja']; ?></td>
                <td style="width:100px;"><?php echo $u['Sahabat']['pekerjaan']; ?></td>
                <td style="width:150px;"><?php echo $u['Sahabat']['kontak']; ?></td>
            </tr>
        <?php
        endforeach;

    }
    ?>
</table>
