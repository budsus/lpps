<h2>Sahabat LPPS</h2>
<a href="<?php echo $this->Html->url(array('controller'=>'Sahabats','action'=>'tambah')); ?>">
    <button class="small button">Tambah baru</button>
</a>
<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
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
                    <td style="width:50px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $u['Sahabat']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                            <ul id="drop<?php echo $u['Sahabat']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Sahabats',
                                            'action'=>'edit',
                                            $u['Sahabat']['id'])); ?>" >
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Sahabats',
                                            'action'=>'hapus',
                                            $u['Sahabat']['id'])); ?>" >
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td style="width:250px;"><?php echo $u['Sahabat']['nama']; ?></td>
                    <td style="width:150px;"><?php echo $u['Sahabat']['gereja']; ?></td>
                    <td style="width:75px;"><?php echo $u['Sahabat']['pekerjaan']; ?></td>
                    <td style="width:150px;"><?php echo $u['Sahabat']['kontak']; ?></td>
                </tr>
            <?php
        endforeach;

    }
    ?>
</table>
