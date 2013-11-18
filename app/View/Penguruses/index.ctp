<h2>Pengurus LPPS</h2>
<a href="<?php echo $this->Html->url(array('controller'=>'Penguruses','action'=>'tambah')); ?>">
    <button class="small button">Tambah baru</button>
</a>
<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Unsur</th>
        <th>Gereja</th>
        <th>Email</th>
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
                    <td style="width:50px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $u['Pengurus']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                            <ul id="drop<?php echo $u['Pengurus']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Penguruses',
                                            'action'=>'edit',
                                            $u['Pengurus']['id'])); ?>" >
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Penguruses',
                                            'action'=>'hapus',
                                            $u['Pengurus']['id'])); ?>" >
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="width:250px;"><?php echo $u['Pengurus']['nama']; ?></td>
                    <td style="width:150px;"><?php echo $u['Pengurus']['jabatan']; ?></td>
                    <td style="width:75px;"><?php echo $u['Pengurus']['unsur']; ?></td>
                    <td style="width:150px;"><?php echo $u['Pengurus']['gereja']; ?></td>
                    <td style="width:150px;"><?php echo $u['Pengurus']['email']; ?></td>
                </tr>
            <?php
        endforeach;

    }
    ?>
</table>
