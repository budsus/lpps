<h2>Profil Staff LPPS</h2>
<a href="<?php echo $this->Html->url(array('controller'=>'Staffs','action'=>'tambah')); ?>">
    <button class="small button">Tambah baru</button>
</a>
<br><br>
<b>Direktur / Manajer Program</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
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
                <td style="width:50px;">
                    <div class="btn-group">
                        <a href="#" data-dropdown="drop<?php echo $u['Staff']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                        <ul id="drop<?php echo $u['Staff']['id'] ?>" data-dropdown-content class="f-dropdown">
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Staffs',
                                        'action'=>'edit',
                                        $u['Staff']['id'])); ?>" >
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Staffs',
                                        'action'=>'hapus',
                                        $u['Staff']['id'])); ?>" >
                                    Hapus
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td style="width: 250px"><?php echo $u['Staff']['nama']; ?></td>
                <td style="width: 230px"><?php echo $u['Staff']['jabatan']; ?></td>
                <td style="width: 150px"><?php echo $u['Staff']['email']; ?></td>
            </tr>
        <?php }
        endforeach;

    }
    ?>
</table>

<b>Pelaksana Pembina dan Pengaderan LPPS</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
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
                    <td style="width:50px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $u['Staff']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                            <ul id="drop<?php echo $u['Staff']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'edit',
                                            $u['Staff']['id'])); ?>" >
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'hapus',
                                            $u['Staff']['id'])); ?>" >
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="width: 250px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 230px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 150px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>

<b>Karyawan</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
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
                    <td style="width:50px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $u['Staff']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                            <ul id="drop<?php echo $u['Staff']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'edit',
                                            $u['Staff']['id'])); ?>" >
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'hapus',
                                            $u['Staff']['id'])); ?>" >
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="width: 250px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 230px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 150px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>

<b>PPP-LPP Sinode yang sudah emeritus</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
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
                    <td style="width:50px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $u['Staff']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                            <ul id="drop<?php echo $u['Staff']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'edit',
                                            $u['Staff']['id'])); ?>" >
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'hapus',
                                            $u['Staff']['id'])); ?>" >
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="width: 250px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 230px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 150px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>

<b>Staf dan Karyawan Pensiun</b><br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
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
                    <td style="width:50px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $u['Staff']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                            <ul id="drop<?php echo $u['Staff']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'edit',
                                            $u['Staff']['id'])); ?>" >
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Staffs',
                                            'action'=>'hapus',
                                            $u['Staff']['id'])); ?>" >
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="width: 250px"><?php echo $u['Staff']['nama']; ?></td>
                    <td style="width: 230px"><?php echo $u['Staff']['jabatan']; ?></td>
                    <td style="width: 150px"><?php echo $u['Staff']['email']; ?></td>
                </tr>
            <?php }
        endforeach;

    }
    ?>
</table>