<?php echo $this->Session->flash();
if(!($this->Session->check('user'))) { ?>
<div class="row">
    <div class="large-12 columns" >
<h2>Daftar Peserta Kegiatan</h2>

<table>
    <tr>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Nomor Telepon/HP</th>
        <th>Status Pendaftaran</th>
    </tr>
    <?php foreach($participants as $participant): ?>
    <tr>
        <td><?php echo $participant['Participant']['nama_lengkap']; ?></td>
        <td><?php echo $participant['Participant']['alamat']; ?></td>
        <td><?php echo $participant['Participant']['telp']; ?></td>
        <td><?php echo $participant['Participant']['status_pendaftaran']; ?></td>
    </tr>
<?php endforeach ?>
   </table>
        <p>Jika ada kesalahan dalam penulisan informasi, silahkan hubungi 0274-5xx</p>
    </div>
</div>
<?php } else { ?>
<div class="row">
    <div class="large-12 columns" >
        <h2>Daftar Peserta Kegiatan</h2>
        <table>
            <tr>
                <th>
                    &nbsp;
                </th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Nomor Telepon/HP</th>
                <th>Metode Pembayaran</th>
                <th>Bank Tujuan</th>
                <th>Nominal Transfer</th>
                <th>Status Pendaftaran</th>
            </tr>
            <?php foreach($participants as $participant): ?>
                <tr>
                    <td style="width:100px;">
                        <div class="btn-group">
                            <a href="#" data-dropdown="drop<?php echo $participant['Participant']['id'] ?>" class="small secondary radius button dropdown" >Menu </a><br>
                            <ul id="drop<?php echo $participant['Participant']['id'] ?>" data-dropdown-content class="f-dropdown">
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Participants',
                                            'action'=>'edit',
                                            $participant['Participant']['id'])); ?>">
                                        Ubah
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url(
                                        array('controller' => 'Participants',
                                            'action'=>'delete',
                                            $participant['Participant']['id'])); ?>"
                                       onclick="return confirm('Yakin untuk dihapus?');">
                                        Hapus
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td><?php echo $participant['Participant']['nama_lengkap']; ?></td>
                    <td><?php echo $participant['Participant']['alamat']; ?></td>
                    <td><?php echo $participant['Participant']['telp']; ?></td>
                    <td><?php echo $participant['Participant']['metode_pembayaran']; ?></td>
                    <td><?php echo $participant['Participant']['bank_tujuan']; ?></td>
                    <td><?php echo $participant['Participant']['nominal_transfer']; ?></td>
                    <td><?php echo $participant['Participant']['status_pendaftaran']; ?></td>
                </tr>
            <?php endforeach ?>

        </table>

    </div>
</div>
<?php }?>