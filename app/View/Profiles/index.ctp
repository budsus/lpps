<h2> Profil LPPS </h2>


<br><br>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Profil LPPS</th>
        <th>Latar Belakang</th>
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

                <td style="width:600px;"><?php echo $u['Profile']['isi']; ?></td>
                <td style="width:600px;"><?php echo $u['Profile']['latar']; ?></td>

            </tr>


        <?php
        endforeach;

    }

    ?>

</a>

</table>
<a href="<?php echo $this->Html->url(
    array('controller' => 'Profiles',
        'action'=>'edit',
        $u['Profile']['id'])); ?>" >
    <button class="small button">Edit</button>
</a>





