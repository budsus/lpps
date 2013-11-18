<h4><dl class="sub-nav">

        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Profiles',
                    'action' => 'index_user')); ?>">Profil</a></dd>
        <dd><a href="<?php echo $this->Html->url(
                array('controller'=>'Staffs',
                    'action' => 'index_user')); ?>">Staff</a></dd>
        <dd><a href="<?php echo $this->Html->url(
                array('controller'=>'Penguruses',
                    'action' => 'index_user')); ?>">Pengurus</a></dd>
        <dd class="active"><a href="<?php echo $this->Html->url(
                array('controller'=>'gkjs',
                    'action' => 'index_user')); ?>">Daftar Alamat GKJ</a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'gkis',
                    'action' => 'index_user')); ?>">Daftar Alamat GKI</a></dd>
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Albums',
                    'action' => 'index_user')); ?>">Galery</a></dd>
    </dl></h4>

<h2>Daftar Alamat GKJ</h2>

<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Gereja</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Fax</th>
        <th>Pendeta</th>
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
                <td style="width:150px;"><?php echo $u['Gkj']['nama']; ?></td>
                <td style="width:350px;"><?php echo $u['Gkj']['alamat']; ?></td>
                <td style="width:100px;"><?php echo $u['Gkj']['telp']; ?></td>
                <td style="width:100px;"><?php echo $u['Gkj']['fax']; ?></td>
                <td style="width:300px;"><?php echo $u['Gkj']['pdt1'] ,"<br>", $u['Gkj']['pdt2'], "<br>", $u['Gkj']['pdt3']; ?></td>

            </tr>
        <?php
        endforeach;

    }
    ?>
</table>
