<h2>Daftar Alamat GKI</h2>
<a href="<?php echo $this->Html->url(array('controller'=>'Gkis','action'=>'tambah')); ?>">
    <button class="small button">Tambah baru</button>
</a>
<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>

        </th>
        <th>Gereja</th>
        <th>Alamat</th>
        <th>Email</th>
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
                <td style="width:130px;">
                    <div class="btn-group">
                        <a href="#" data-dropdown="drop<?php echo $u['Gki']['id'] ?>" class="small secondary radius button dropdown">Opsi</a><br>
                        <ul id="drop<?php echo $u['Gki']['id'] ?>" data-dropdown-content class="f-dropdown">
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Gkis',
                                        'action'=>'edit',
                                        $u['Gki']['id'])); ?>" >
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $this->Html->url(
                                    array('controller' => 'Gkis',
                                        'action'=>'hapus',
                                        $u['Gki']['id'])); ?>" >
                                    Hapus
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
                <td style="width:100px;"><?php echo $u['Gki']['nama']; ?></td>
                <td style="width:300px;"><?php echo $u['Gki']['alamat']; ?></td>
                <td style="width:100px;"><?php echo $u['Gki']['email']; ?></td>
                <td style="width:70px;"><?php echo $u['Gki']['telp']; ?></td>
                <td style="width:70px;"><?php echo $u['Gki']['fax']; ?></td>
                <td style="width:250px;"><?php echo $u['Gki']['pdt1'] , $u['Gki']['pdt2'], $u['Gki']['pdt3']; ?></td>

            </tr>
        <?php
        endforeach;

    }
    ?>
</table>
