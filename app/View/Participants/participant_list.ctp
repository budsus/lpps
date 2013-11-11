<h2>Daftar Peserta Kegiatan</h2>

<table>
    <tr>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Nomor Telepon/HP</th>
    </tr>
    <?php foreach($participants as $participant): ?>
    <tr>
        <td><?php echo $participant['Participant']['nama_lengkap']; ?></td>
        <td><?php echo $participant['Participant']['alamat']; ?></td>
        <td><?php echo $participant['Participant']['telp']; ?></td>
    </tr>
<?php endforeach ?>
   </table>