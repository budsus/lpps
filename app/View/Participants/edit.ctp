<h2>Ubah Data Peserta</h2>
<?php
echo $this->Form->create('Participant', array('action' => 'save'));
echo $this->Form->input('Participant.id',
    array('type' =>'hidden', 'value' => $data['Participant']['id']));
echo $this->Form->input('Participant.nama_lengkap',
    array('type' =>'text',
        'value' => $data['Participant']['nama_lengkap']));
echo $this->Form->input('Participant.alamat',
    array('type' =>'text',
        'value' => $data['Participant']['alamat']));
echo $this->Form->input('Participant.telp',
    array('type' =>'text',
        'value' => $data['Participant']['telp']));
echo 'Metode Pembayaran<br />';
echo $data['Participant']['metode_pembayaran'];
echo '<br />Transfer ke bank<br />';
echo $data['Participant']['bank_tujuan'];
echo '<br />Nominal Transfer<br />';
echo $data['Participant']['nominal_transfer'];
echo '<br />';
echo $this->Form->input('Participant.status_pendaftaran',
    array(
        'options' => array('belum dikonfirmasi' => 'belum dikonfirmasi', 'sudah dikonfirmasi' => 'sudah dikonfirmasi', 'data ditampung' => 'data ditampung'),
        'selected' => $data['Participant']['status_pendaftaran']));
echo $this->Form->input('Participant.activity_id',
    array('type' =>'hidden', 'value' => $data['Participant']['activity_id']));
echo $this->Form->end('Save');
?>