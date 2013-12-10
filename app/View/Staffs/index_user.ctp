<h4><dl class="sub-nav">
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Profiles',
                    'action' => 'index_user')); ?>">Profil  </a></dd>
        <dd class="active"><a href="<?php echo $this->Html->url(
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
        <dd ><a href="<?php echo $this->Html->url(
                array('controller'=>'Sahabats',
                    'action' => 'index_user')); ?>">Sahabat LPPS  </a></dd>
    </dl></h4>


<h2>Profil Staff LPPS</h2>
<br><br>
<b>Direktur / Manajer Program</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data Direktur</td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            if($u['Staff']['golongan'] == 'A'){
                ?>
                <tr>
                    <td style="width: 500px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>
<hr><br>
<b>Pelaksana Pembina dan Pengaderan LPPS</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>

        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data Direktur</td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            if($u['Staff']['golongan'] == 'B'){
                ?>
                <tr>
                    <td style="width: 500px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>
<hr></hr><br>
<b>Karyawan</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>

        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data Karyawan</td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            if($u['Staff']['golongan'] == 'C'){
                ?>
                <tr>
                    <td style="width: 500px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>
<hr></hr><br>
<b>PPP-LPP Sinode yang sudah emeritus</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>

        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data Karyawan</td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            if($u['Staff']['golongan'] == 'D'){
                ?>
                <tr>
                    <td style="width: 500px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>
<hr></hr><br>
<b>Staf dan Karyawan Pensiun</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>

        <th>Nama</th>
        <th>Jabatan</th>
        <th>Email</th>
    </tr>
    </thead>
    <?php
    // jika tidak ada data user
    if (sizeof($data) == 0) {
        ?>
        <tr><td colspan="4">Belum ada data Karyawan</td></tr>
    <?php
    } else {
        // jika sudah ada data akun user

        foreach($data as $u):
            if($u['Staff']['golongan'] == 'E'){
                ?>
                <tr>
                    <td style="width: 500px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 300px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>